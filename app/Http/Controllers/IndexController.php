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

        return view('index', compact('user', $user));
    }    

    public function sendChatMessage(Request $request) {
        $messages = new ChatMessages;
        $messages->username = Auth::user()->name;
        $messages->message = $request->message;
        
        if($messages->save())
        {
            echo "success";
        }
        else
        {
            echo "error";
        }
    }
}
