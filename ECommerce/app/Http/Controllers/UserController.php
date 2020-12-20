<?php

namespace App\Http\Controllers;
use validator;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        return view('website.backend.layouts.users.login');
    }

    public function checklogin(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email' => $request -> get('email'),
            'password' => $request -> get('password')
        );


        if(Auth::attempt($user_data))
        {
            $tmp = \App\Models\User::where('email', $request->get('email'))->get();

            if($tmp[0]['usertype'] === 'admin')
            return redirect('/login/successloginadmin');
            else
            return redirect('/login/successlogin');
        }
        else
        {
            return back()->with('error','Failed login');
        }
    }

    public function successlogin()
    {
        return  redirect('../index');
       // return view('website.backend.layouts.main');
    }

    public function contact()
    {
        return view('website.backend.layouts.contact-us');
    }

    public function successloginadmin()
    {
        return view('website.backend.layouts.admin.dash');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

}
