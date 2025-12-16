<?php

namespace App\Listeners;

use App\Events\JobPublished;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NotifyUsersOfJob implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(JobPublished $event): void
    {
        
        $users = User::latest()->take(1)->get();

        foreach ($users as $user) {
             Mail::raw("Hey $user->first_name $user->last_name, Check out new job : '{$event->jobListing->title}'", function( $message ) use ($user) {
                    $message->to($user->email)
                            ->subject('New Job Published!');

            });
        }

       
    }
}
