<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;                        
use Illuminate\Support\Facades\Mail;                        

class MailController extends Controller
{
   public function sendEmail(){
      
        $details=[
            'tital'=>'Email Tital test 1',
            'body'=>'Email body'
        ];

        Mail::to("brijmansuriya.ai@gmail.com")->send(New TestMail($details));
        return "Email Send";
    }
}
