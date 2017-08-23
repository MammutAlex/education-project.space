<?php

namespace App\Providers;

use App\Article;
use App\Direction;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('directions', Direction::get());
        view()->share('lastNews', Article::orderBy('date', 'desc')->take(3)->get());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
