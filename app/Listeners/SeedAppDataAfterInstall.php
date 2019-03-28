<?php

namespace App\Listeners;

use App\Events\AfterAppInstall ;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class SeedAppDataAfterInstall
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
     * @param  AfterAppInstall   $event
     * @return void
     */
    public function handle(AfterAppInstall  $event)
    {
        //
        Log::info('ticket created Successfully');
    }
}
