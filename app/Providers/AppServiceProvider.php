<?php

namespace App\Providers;

use App\Models\Category;
// use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);

        
        Paginator::useBootstrap();




        // DB::listen(function ($query) {
        //     dump($query->sql, $query->bindings);
        // });

        

        view()->composer('layouts.categoriesMenu', function ($view) {
            /****
             * дерево категорий
             */
            $categories = Category::whereNull('category_id')
                // ->withCount('products')
                ->with('childrenCategories')
                ->get();
            $view->with('categories', $categories);
        });
    }
}
