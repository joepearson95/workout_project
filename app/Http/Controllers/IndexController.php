<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ChatMessages;
use Auth;

class IndexController extends Controller
{
    public function index()
    {
        //Finds the first user from the session data of who is logged in
        $user = User::where('id', Auth::id())->first();
        //get messages and show them to the chat box
        $messages = ChatMessages::all();

        return view('index', ['user' => $user, 'messages' => $messages]);
    }    
}
