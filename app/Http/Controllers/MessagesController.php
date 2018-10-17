<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    //Messages from the form

    public function submit(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);
        
        //Create a message 

        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        //save the message

        $message->save();

        //Redirect

        return redirect('/')->with('success', 'Message Sent');
    }

    public function getMessages() {
        $messages = message::all();

        return view('messages')->with('messages', $messages);
    }
}
