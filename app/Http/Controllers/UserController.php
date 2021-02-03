<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registerUser()
    {
        $user = new User();
        $user = username->find();
        $user = email->find();
        $user->password = Hash::make();
        $user = day->find();
        $user = mounth->find();
        $user = year->find();
        $user->save();
        
    }
}
