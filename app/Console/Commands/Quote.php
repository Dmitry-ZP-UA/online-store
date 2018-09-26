<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Log;
use Illuminate\Console\Command;

class Quote extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quote:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate random quote';

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
        $quotes = $this->getConfig();

        $randomQuote = $quotes[array_rand($quotes)];

        Log::info($randomQuote);

    }

    public function getConfig()
    {
        return config('app.quotes');
    }
}
