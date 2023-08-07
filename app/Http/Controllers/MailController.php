<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
use  App\Models\Message;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [

            'title' => 'Mail from MASSEYE GNING',
            'body' => 'This is for testing email usign smtp',

        ];
        Mail::to('gningmasseye10@gmail.com')->send(new DemoMail($mailData));

        dd('Email send successfull.');
    }
    public function contact()
    {
        return view('contact');
    }
    public function contactSend(Request $request)
    {
       $message = new Message();

       $message->email = $request->email;
       $message->subject = $request->subject;
       $message->contenu = $request->contenu;

        
        $message = [

            'email' => $request->email,
            'subject' => $request->subject,
            'contenu' => $request->contenu,

        ];
        Mail::to($request->email)->send(new DemoMail($message));


        return redirect('/');

    }
}
