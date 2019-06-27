<?php

namespace App\Http\Controllers;

use App\Model\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {

        $users = Users::where('role', '!=', 'superadmin')->get();

        $data['users'] = $users;

        return view('admin/list-user', $data);
    }

    public function create()
    {
        return view('admin.add-user');
    }
}
