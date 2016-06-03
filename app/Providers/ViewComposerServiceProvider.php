<?php

namespace App\Providers;

use App\Article;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeNavigation();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function composeNavigation()
    {

        view()->composer('navbars.mainNav', function ($view) {
            $view->with('currentUser', Auth::user());
        });

        view()->composer('home', function ($view) {
            $view->with('currentUser', Auth::user());
        });


        view()->composer('navbars.userMenu', function ($view) {
            $view->with('currentUser', Auth::user());
        });


//        view()->composer('navbars.adminMenu', function ($view) {
//            $view->with('currentUser', Auth::user());
//        });


        view()->composer('user', function ($view) {
            $view->with('currentUser', Auth::user());
        });

        view()->composer('programs.index', function ($view) {
            $view->with('currentUser', Auth::user());
        });

        view()->composer('articles.index', function ($view) {
            $view->with('currentUser', Auth::user());
        });
    }
}
