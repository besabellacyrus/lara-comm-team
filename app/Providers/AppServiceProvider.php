<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;
use App\Team;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.app', function($view) {
            $view->with('users', User::all());
        });

        view()->composer('posts.create', function($view) {
            $view->with('teams', auth()->user()->teams);
        });
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
