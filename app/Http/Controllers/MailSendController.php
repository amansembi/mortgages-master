<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Mail\SendMail;

class MailSendController extends Controller
{
    public function mailsend()
    {
        $details = [
            'title' => 'Title: Mail from Real Programmer',
            'body' => 'Body: This is for testing email using smtp'
        ];

      \Mail::to('amrindersembi@gmail.com')->send(new SendMail($details));
        return view('emails.thanks');
    }
}
