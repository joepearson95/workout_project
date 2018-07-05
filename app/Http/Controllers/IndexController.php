<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class IndexController extends Controller
{
    //Finds data based on the logged in user and shows this on the 'dashboard' page
    public function index()
    {
        $user = User::where('id', Auth::id())->first();
        return view('index', compact('user', $user));
    }
}
