<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    public function contact()
    {
        return view('website.backend.layouts.contact-us');
    }



    public function sendEmail(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required'
        ]);


        $data = [
            'name'    => $request->name,
            'email'   => $request->email,
            'comment' => $request->comment
        ];

        Mail::to('testmerytest123@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Merci de nous contacter!');
    }
}
