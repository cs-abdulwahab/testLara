<?php

namespace App\Console\Commands;

use App\Events\ChatMessageWasReceived;
use App\Events\DummyEvent;
use Illuminate\Console\Command;

class generateDummy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:dummy{message}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate:dummy';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // echo 'generate:dummy handle called';
        event(new DummyEvent());
    }
}
