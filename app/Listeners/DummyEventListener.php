<?php

namespace App\Listeners;

use App;
use App\Events\DummyEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DummyEventListener implements  ShouldQueue
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
        $pusher = App::make('pusher');

        for ($i = 0; $i < 50; $i++) {
            $pusher->trigger('dummy-channel', 'dummy-event', array('text' => 'i = ' . $i));
             echo 'i = '.$i.'<br/>';
        }


    }
}
