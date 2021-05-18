<?php

namespace App\Honeypot;

use App\Honeypot\View\Components\HoneyPot;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class HoneypotServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/honeypot.php', 'honeypot');
    }

    public function boot()
    {
        $this->app->singleton(\App\Honeypot\Honeypot::class, function() {
            return new \App\Honeypot\Honeypot($this->app['request'], $this->app['config']->get('honeypot'));
        });

        Blade::component('honeypot',HoneyPot::class);

        //.... to override default message and code.
        \App\Honeypot\Honeypot::abortUsing(function() {
            return abort(422, 'Spam detected ;)');
        });
    }
}
