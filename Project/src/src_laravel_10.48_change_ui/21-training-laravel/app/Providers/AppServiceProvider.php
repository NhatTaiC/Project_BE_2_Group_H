<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

<<<<<<< HEAD
=======
use Illuminate\Pagination\Paginator;

>>>>>>> ed6f8b7a0d5e47d0a1920dbb0677276fccbd02f1
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
        //
=======
       Paginator::useBootstrap();
>>>>>>> ed6f8b7a0d5e47d0a1920dbb0677276fccbd02f1
    }
}
