<?php

namespace soluwire\currencyapi;

use Illuminate\Support\ServiceProvider;

class CurrencyApiProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/settings/config.php', 'currencyapi'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/settings/config.php' => config_path('config.php'),
        ]);
    }
}
