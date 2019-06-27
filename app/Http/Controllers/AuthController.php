<?php

namespace App\Http\Controllers;

use App\Model\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request){

        $validator = Validator::make($request->all(), [
            'email'  => 'required',
            'password'  => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $email       = $request->input('email');
        $password       = $request->input('password');

        $user = Users::where('email', $email)->where('password', md5($password))->first();

        if($user!=null){
            session([
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role,
                'status' => $user->status,
                ]);
            return redirect('/admin')->withSuccess(trans('auth.login_success'));
        }else{
            return redirect()->back()->withErrors(trans('auth.login_failed'))->withInput();
        }

    }

    public function logout(){
        session()->flush();
        return redirect('/login')->withSuccess(trans('auth.logout_success'));
    }

}
