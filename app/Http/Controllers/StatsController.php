<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class StatsController extends Controller
{
    public function index() {
        //Finds the first user from the session data of who is logged in
        $user = User::where('id', Auth::id())->first();
        return view('stats', ['user' => $user]);
    }
}
