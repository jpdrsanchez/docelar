<?php

namespace App\Providers;

use App\Models\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

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
        $configuration = Config::all();
        $configuration = $configuration->reduce(function ($carry, $value) {
            $carry[$value->field_name] = $value->field_value;
            return $carry;
        }, []);

        View::share('configuration', $configuration);

        Fortify::loginView(fn () => view('control.auth.login'));
    }
}