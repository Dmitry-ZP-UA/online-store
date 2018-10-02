<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contract\HTTPClientInterface;
use App\Services\HTTPClient\GuzzleHTTPClient;
use App\Services\HTTPClient\VinelabHTTPClient;


class HTTPClientProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
         HTTPClientInterface::class,
         VinelabHTTPClient::class
        );


    }
}
