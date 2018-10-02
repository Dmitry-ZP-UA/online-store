<?php

namespace App\Console\Commands;

use App\Contract\HTTPClientInterface;
use App\Services\HTTPClient\GuzzleHTTPClient;
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

   private $httpClient;

    public function __construct(HTTPClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;

        parent::__construct();
    }

    /**
     *
     */
    public function handle()
    {
        $url = $this->ask("URL = ");

        $this->info($this->httpClient->getStatusCode($url));
    }

}
