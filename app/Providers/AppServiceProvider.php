<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        //
        View::composer(['blog','post'], function ($view) {
        // View::composer(['post'], function ($view) {

            // dd($view);
            // $categories = Category::where('enabled',true)->orderBy('sort','asc')->get();
            $categories = Category::where('enabled',true)->get();

            // dd($categories);
            $view->with('categories',$categories);
            // dd($view);
        });
    }
}
