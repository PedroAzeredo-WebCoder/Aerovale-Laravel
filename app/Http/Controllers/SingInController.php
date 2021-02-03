<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingInController extends Controller
{
    public function registerUser()
    {
        
        $user = new User();
        $user = username->find();
        $user->password = Hash::make();
        $user->save();
        
    }
}
