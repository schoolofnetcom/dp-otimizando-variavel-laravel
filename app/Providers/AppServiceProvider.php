<?php

namespace App\Providers;

use App\Http\View\Composers\UserComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\User;
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
        View::composer([
            'primeira', 'segunda', 'terceira', 'quarta', 'quinta'
        ], UserComposer::class);
        // View::share('users', User::all());
    }
}
