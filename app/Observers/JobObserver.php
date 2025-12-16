<?php

namespace App\Observers;

use App\Models\Job;
use Illuminate\Support\Str;

class JobObserver
{

    /**
     * Handle the Job "creating" event.
     */
    public function creating(Job $job): void
    {
        $job->title = Str::slug($job->title);

    }

    /**
     * Handle the Job "created" event.
     */
    public function created(Job $job): void
    {
        //
    }

    /**
     * Handle the Job "updated" event.
     */
    public function updated(Job $job): void
    {
        //
    }

    /**
     * Handle the Job "deleted" event.
     */
    public function deleted(Job $job): void
    {
        //
    }

    /**
     * Handle the Job "restored" event.
     */
    public function restored(Job $job): void
    {
        //
    }

    /**
     * Handle the Job "force deleted" event.
     */
    public function forceDeleted(Job $job): void
    {
        //
    }
}
