<?php

namespace App\Http\Controllers;

use App\Helpers\SendEmailHelper;
use App\Helpers\TokenLifeHelper;
use App\Model\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'address' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $name = $request->input('name');
        $email = $request->input('email');

        /* Set transaction */
        DB::beginTransaction();

        //token for email confirmation
        $token = TokenLifeHelper::getToken(32);

        $new_user = new Users();
        $new_user->name = $request->input('name');
        $new_user->password = md5($request->input('password'));
        $new_user->email = $request->input('email');
        $new_user->address = $request->input('address');
        $new_user->gender = $request->input('gender');
        $new_user->role = 'pengelola';
        $new_user->phone = $request->input('phone');
        $new_user->token = $token;
        $new_user->token_lifetime = date('Y-m-d H:i:s', time() + 3600 * 24);
        $new_user->token_status = 1;


        $success = $new_user->save();

        if (!$success) {
            /* Transsaction di rollback */
            DB::rollBack();

            return redirect()->back()->withErrors(trans('auth.register_failed'))->withInput();
        }

        /* Save transaction ke DB */
        DB::commit();

        //generate link
        $link = App::make('url')->to('/confirmation/' . $token);

        //send email to user
        SendEmailHelper::sendEmailAddUser($name, $link, $email);

        $request->session()->flash('alert', 'alert-success');
        $request->session()->flash('message', 'Registrasi berhasil, silahkan tunggu aktivasi akun dari admin.');
        
        return redirect('/login')->withSuccess(trans('auth.register_success'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * fungsi untuk konfirmasi user
     * @param $token
     */
    public function confirmation($token){
        if($token==null || $token ==''){
            return redirect('/login')->withErrors(trans('auth.token_not_found'));
        }

        //check token expired time
        $data_user = Users::where([
            ['token_lifetime', '>=', date('Y-m-d H:i:s', time())],
            ['token', $token],
            ['token_status', 1]
        ])->first();

        //jika tidak ditemukan
        if($data_user==null){
            return redirect('/login')->withErrors(trans('auth.user_not_found'));
            //TODO : provide view for this condition
        }

        DB::beginTransaction();

        $data_user->status = 1;
        $data_user->token_status = 0;
        $success = $data_user->save();

        if(!$success){
            DB::rollBack();
            return redirect('/login')->withErrors(trans('auth.failed_confirmation'));
            //TODO : provide view for this condition
        }

        DB::commit();

        return redirect('/login')->withSuccess(trans('auth.success_confirmation'));
        //TODO : provide view for this condition

    }
}
