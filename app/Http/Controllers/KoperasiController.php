<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Users;

class KoperasiController extends Controller
{
    //
    public function index()
    {
        $koperasi = Users::where('id', 3)->get();
        return view('admin.list-koperasi', compact('koperasi'));
    }

    public function create()
    {
        return view('admin.add-koperasi');
    }
}
