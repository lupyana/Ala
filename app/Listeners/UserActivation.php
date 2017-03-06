<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserActivation
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  IlluminateAuthEventsRegistered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $UserToken = \App\UserToken::create([
            'user_id' => $event->user->id,
            'token' => str_random(64),
            'status' => 0
        ]);

        $event->user->notify(new \App\Notifications\Mail\activationEmail($UserToken));
    }
}
