<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailer;
use Mail;

class EmailController extends Controller
{
    public function sendEmail(){
        Mail::to("kkperera@gmail.com")->send(new TestMail("Kuku"));
    }
}
