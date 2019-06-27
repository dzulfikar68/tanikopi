<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function dashboard(){
        return view('admin.index');
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

        $admin = Admin::where('email', $email)->where('password', md5($password))->first();

        if($admin!=null){
            session([
                'id' => $admin->id,
                'name' => $admin->name,
                'email' => $admin->email,
                'role' => 'admin',
            ]);
            return redirect('/admin/dashboard')->withSuccess(trans('auth.login_success'));
        }else{
            return redirect()->back()->withErrors(trans('auth.login_failed'))->withInput();
        }

    }

    public function logout(){
        session()->flush();
        return redirect('/admin/login')->withSuccess(trans('auth.logout_success'));
    }
}
