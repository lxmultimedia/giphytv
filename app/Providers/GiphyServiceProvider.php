<?php

namespace App\Providers;

use App\Http\Clients\GiphyClient;
use App\Http\Services\GiphyService;
use Illuminate\Support\ServiceProvider;

class GiphyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(GiphyClient::class, function () {
            return new GiphyClient(['base_uri' => 'https://api.giphy.com/v1/gifs/']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
