<?php

namespace App\Listeners;

use App\Events\JobPublished;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NotifyAdminOfJob implements ShouldQueue
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
        Mail::raw("A new job titled  '{$event->jobListing->title}' has been created.", function($message){
            $message->to('admin@admin.com')
                    ->subject('New Job Published');

        });
    }
}
