<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SendEmailHelper;
use App\Helpers\TokenLifeHelper;
use App\Http\Controllers\Controller;
use App\Model\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = Users::get();

        $data['users'] = $users;

        return view('admin/list-user', $data);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'address' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'name' => 'required',
            'role' => 'required',
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
        $new_user->role = $request->input('role');
        $new_user->phone = $request->input('phone');
        $new_user->token = $token;
        $new_user->token_lifetime = date('Y-m-d H:i:s', time() + 3600 * 24);
        $new_user->token_status = 1;


        $success = $new_user->save();

        if (!$success) {
            /* Transsaction di rollback */
            DB::rollBack();

            return redirect()->back()->withErrors(trans('web.add_failed', ['model' => 'User']))->withInput();
        }

        /* Save transaction ke DB */
        DB::commit();

        //generate link
        $link = App::make('url')->to('/confirmation/' . $token);

        //send email to user
        SendEmailHelper::sendEmailAddUser($name, $link, $email);

        return redirect('/admin/user')->withSuccess(trans('web.add_success', ['model' => 'User']));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email,'.$request->input('id'),
            'password' => 'required|string|min:6',
            'address' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'name' => 'required',
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        /* Set transaction */
        DB::beginTransaction();

        $id = $request->input('id');

        $updateUser = Users::find($id);

        if($updateUser==null){
            return redirect()->back()->withErrors(trans('web.edit_failed', ['model' => 'User', 'message' => trans('web._not_found', ['object'=>'User'])]))->withInput();
        }

        $updateUser->name = $request->input('name');
        $updateUser->password = md5($request->input('password'));
        $updateUser->email = $request->input('email');
        $updateUser->address = $request->input('address');
        $updateUser->gender = $request->input('gender');
        $updateUser->role = $request->input('role');
        $updateUser->phone = $request->input('phone');

        $success = $updateUser->save();

        if (!$success) {
            /* Transsaction di rollback */
            DB::rollBack();

            return redirect()->back()->withErrors(trans('web.edit_failed', ['model' => 'User']))->withInput();
        }

        /* Save transaction ke DB */
        DB::commit();

        return redirect('/admin/user')->withSuccess(trans('web.edit_success', ['model' => 'User']));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();

        $user = Users::find($id);

        if($user==null){
            return redirect()->back()->withErrors(trans('web.delete_failed', ['model' => 'User', 'message' => trans('web._not_found', ['object'=>'User'])]))->withInput();
        }

        $success = $user->delete();

        if(!$success){
            DB::rollBack();

            return redirect()->back()->withErrors(trans('web.delete_failed', ['model' => 'User']))->withInput();
        }

        DB::commit();

        return redirect('/admin/user')->withSuccess(trans('web.delete_success', ['model' => 'User']));

    }

    public function verify(Request $request, $id)
    {
        $product = Users::find($id);
        $product->status = $request->status;
        $product->update();
        
        return redirect('/admin/user')->withSuccess(trans('web.edit_success', ['model' => 'User']));
    }
}
