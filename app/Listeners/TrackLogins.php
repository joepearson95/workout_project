<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TrackLogins
{
    /**
     * Create the event listener.
     *
     * @param Request $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     * 
     * Checks the current date and see's if the user has already previously logged in today.
     * If not, then the 'days_active' column will be updated
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $user = $event->user;

        if(!$user->updated_at->isToday())
        {
            $user->updated_at = Carbon::now();
            $user->days_active++;
            
            $user->save();
        }
    }
}
