<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return view()->make("home.index");
    }

    public function send()
    {
        Log::info("Request cycle without Queues started");
       /* Mail::send('email.welcome', ['data'=>'data'], function ($message) {

            $message->from('me@gmail.com', 'Christian Nwmaba');

            $message->to('chris@scotch.io');

        });
       */ Log::info("Request cycle without Queues finished");
    }


}
