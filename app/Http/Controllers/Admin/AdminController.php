<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selfId = session()->get('id');

        $admins = Admin::where('id', '!=', $selfId)->where('id', '!=', 1)->get();

        $data['admins'] = $admins;

        return view('admin/list-admin', $data);
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
            'email' => 'required|email|unique:admin,email',
            'password' => 'required|string|min:6',
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        /* Set transaction */
        DB::beginTransaction();

        $newAdmin = new Admin();
        $newAdmin->name = $request->input('name');
        $newAdmin->password = md5($request->input('password'));
        $newAdmin->email = $request->input('email');

        $success = $newAdmin->save();

        if (!$success) {
            /* Transsaction di rollback */
            DB::rollBack();

            return redirect()->back()->withErrors(trans('web.add_failed', ['model' => 'Admin']))->withInput();
        }

        /* Save transaction ke DB */
        DB::commit();

        return redirect('/admin/admin')->withSuccess(trans('web.add_success', ['model' => 'Admin']));

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
            'email' => 'required|email|unique:admin,email,'.$request->input('id'),
            'password' => 'required|string|min:6',
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        /* Set transaction */
        DB::beginTransaction();

        $id = $request->input('id');

        $updateAdmin = Admin::find($id);

        if($updateAdmin==null){
            return redirect()->back()->withErrors(trans('web.edit_failed', ['model' => 'Admin', 'message' => trans('web._not_found', ['object'=>'Admin'])]))->withInput();
        }

        $updateAdmin->name = $request->input('name');
        $updateAdmin->password = md5($request->input('password'));
        $updateAdmin->email = $request->input('email');

        $success = $updateAdmin->save();

        if (!$success) {
            /* Transsaction di rollback */
            DB::rollBack();

            return redirect()->back()->withErrors(trans('web.edit_failed', ['model' => 'Admin']))->withInput();
        }

        /* Save transaction ke DB */
        DB::commit();

        return redirect('/admin/admin')->withSuccess(trans('web.edit_success', ['model' => 'Admin']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $selfId = session()->get('id');

        if($id==$selfId){
            return redirect()->back()->withErrors(trans('web.delete_failed', ['model' => 'Admin', 'message' => trans('web._not_found', ['object'=>'Admin'])]));
        }

        DB::beginTransaction();

        $admin = Admin::where('id', $id)->where('id', '!=', 1)->first();

        if($admin==null){
            return redirect()->back()->withErrors(trans('web.delete_failed', ['model' => 'Admin', 'message' => trans('web._not_found', ['object'=>'Admin'])]));
        }

        $success = $admin->delete();

        if(!$success){
            DB::rollBack();

            return redirect()->back()->withErrors(trans('web.delete_failed', ['model' => 'Admin']))->withInput();
        }

        DB::commit();

        return redirect('/admin/admin')->withSuccess(trans('web.delete_success', ['model' => 'Admin']));

    }
}
