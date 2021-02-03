<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppAdminController extends Controller
{
    public function register()
    {
        return view('admin.registerUser');
    }

    public function doRegister(Request $request)
    {
        dd($request->all());
    }

    public function management()
    {
        return view('admin.content');
    }
}
