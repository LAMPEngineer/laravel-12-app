<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class MailController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Laravel12 Mailer',
            'order_no' => 12345,
            'user' => 'John Dou'
        ];

        Mail::to("lamp.engineer@gmail.com")->send(new TestMail($data));

        dd("Mail Sent");
    }
}
