<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{

    public function index(){
        $messages = Message::all();
        return view ('admin.message', compact('messages'));
    }

    public function store(){
        $message = new Message();

        $message->nom = request('name');
        $message->email = request('email');
        $message->subject = request('subject');
        $message->message = request('message');

        $message->save();
        return redirect()->back();
    }
}
