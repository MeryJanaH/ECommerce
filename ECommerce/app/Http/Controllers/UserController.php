<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginRegister(){
        return view('website.backend.layouts.users.login');
    }
}
