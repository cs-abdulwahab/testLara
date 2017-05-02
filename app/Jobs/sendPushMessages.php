<?php

namespace App\Jobs;

use App;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendPushMessages implements ShouldQueue
{

    use InteractsWithQueue, Queueable, SerializesModels;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $pusher = App::make('pusher');

        echo 'send push message aysnc way';


        for ($i = 0; $i < 50; $i++) {
            $pusher->trigger('async-channel', 'Testingasync-event', array('text' => 'i = ' . $i));
            // echo 'i = '.$i.'<br/>';
        }
    }
}
