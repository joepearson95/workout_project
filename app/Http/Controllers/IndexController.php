<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ChatMessages;
use App\TaskList;
use Auth;
use Redirect;

class IndexController extends Controller
{
    //function for the base of the dashboard to show all relevant information per user
    public function index()
    {
        //Finds the first user from the session data of who is logged in
        $user = User::where('id', Auth::id())->first();
        $tasks = TaskList::where('created_by', Auth::user()->name)->get();

        return view('index', ['user' => $user, 'tasks' => $tasks]);
    }    

    //function for sending chat messages to the database, taking in the response via AJAX calls
    public function sendChatMessage(Request $request) 
    {
        $messages = new ChatMessages;
        $messages->username = Auth::user()->name;
        $messages->message = $request->message;

        if($messages->save())
        {
            echo "successfully created msg";
        }
        else
        {
            echo "could not save msg";
        }
    }

    //creates the tasks from user input and sends it to the db
    public function sendTask(Request $request)
    {
        $tasks = new TaskList();
        $tasks->created_by = Auth::user()->name;
        $tasks->task = $request->task;

        $tasks->save();

        return redirect()->to('/');
    }

    //deletes specified task
    public function deleteTask($id)
    {
        $taskToDelete = TaskList::findOrFail($id);
        $taskToDelete->delete();
        
        return redirect()->to('/');
    }
}
