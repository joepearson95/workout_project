<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Notifications;
use Auth;

class IndexController extends Controller
{
    public function index()
    {
        //Finds the first user from the session data of who is logged in
        $user = User::where('id', Auth::id())->first();
        //gets notifications based on logged in user session data and counts them for number display
        $notifications = Notifications::where('name', Auth::user()->name)->get();
        $notificationsCount = $notifications->count();

        return view('index', ['user' => $user, 'notifications' => $notifications, 'notificationsCount' => $notificationsCount]);
    }    
}
