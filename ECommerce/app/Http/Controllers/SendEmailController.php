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

        $to = 'testmerytest123@gmail.com';
        $subject = 'AMWA';
        $message = $data['name'] ." à un message : \n".$data['comment'];
        $headers = 'From: ' . $data['email'] . "\r\n";
        $headers .= 'X-Mailer: PHP/' . phpversion();
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        if (mail($to, $subject, $message, $headers))
            return back()->with('success', 'Merci de nous contacter!');
        else
            return "Erreur d'envoie de message";


    }
}
