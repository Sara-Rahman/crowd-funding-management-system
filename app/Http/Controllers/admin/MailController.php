<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details =[
            'title' => 'Email from admin',
            'body' => 'This is a testing mail form admin'
        ];
        Mail::to("shahida7052@gmail.com")->send(new TestMail($details));
        return "Email sent";
    }
}
