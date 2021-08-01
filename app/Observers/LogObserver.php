<?php

namespace App\Observers;

use App\Models\Log;

class LogObserver
{
    /**
     * Handle the Log "created" event.
     *
     * @param  \App\Models\Log  $log
     * @return void
     */
    public function created(Log $log)
    {
        if (! \App::runningInConsole()) {
            $user = $log->task->user;
            
            //Seendig email
            mail("$user->email", 'new Log register' , $log->comment);
        }
    }

    /**
     * Handle the Log "updated" event.
     *
     * @param  \App\Models\Log  $log
     * @return void
     */
    public function updated(Log $log)
    {
        //
    }

    /**
     * Handle the Log "deleted" event.
     *
     * @param  \App\Models\Log  $log
     * @return void
     */
    public function deleted(Log $log)
    {
        //
    }

    /**
     * Handle the Log "restored" event.
     *
     * @param  \App\Models\Log  $log
     * @return void
     */
    public function restored(Log $log)
    {
        //
    }

    /**
     * Handle the Log "force deleted" event.
     *
     * @param  \App\Models\Log  $log
     * @return void
     */
    public function forceDeleted(Log $log)
    {
        //
    }
}
