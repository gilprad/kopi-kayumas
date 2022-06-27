<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\CartDetail;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view) {
            $carts = CartDetail::whereHas('cart', function($q) {
                $q->where([
                    ['user_id', Auth::id()],
                    ['checkout', false]
                ]); 
             })->count();

            $view->with('cart_total', $carts);
        });
    }
}
