<?php

namespace Wame\LaravelNova\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Nova;

class LaravelNovaServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        Nova::serving(function (): void {
            Nova::style('wame-laravel-nova', __DIR__ . '/../../resources/css/style.css');
        });

        Footer::make();
    }
}
