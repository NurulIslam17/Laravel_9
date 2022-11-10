<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class MessageController extends Controller
{
    public function sendMessage()
    {
        return view('basic.message.index');
    }

    public function sendToUser(Request $request)
    {

        $validated = $request->validate([
            'user_number' => 'required|max:15|min:11',
        ]);

        $number = $request->user_number;
        $message = $request->user_message;


        $account_sid = getenv("TWILIO_SID");
        $auth_token = getenv("TWILIO_TOKEN");
        $twilio_number = getenv("TWILIO_FROM");

        $client = new Client($account_sid, $auth_token);
        $client->messages->create($number, ['from' => $twilio_number, 'body' => $message]);



        return back()->with('success','Message is sent to '.$number);
    }
}
