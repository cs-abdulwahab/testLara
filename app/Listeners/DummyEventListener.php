<?php

namespace App\Listeners;

use App\Events\DummyEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DummyEventListener
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
     * @param  =DummyEvent  $event
     * @return void
     */
    public function handle(DummyEvent $event)
    {
        //
    }
}
