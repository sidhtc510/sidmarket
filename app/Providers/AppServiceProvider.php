<?php

namespace App\Providers;

use App\Models\Category;
// use App\Models\Product;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrap();



        view()->composer('layouts.categoriesMenu', function ($view) {
            /****
             * дерево категорий
             */
            $categories = Category::whereNull('category_id')
                ->withCount('products')
                ->with('childrenCategories')
                ->get();
            $view->with('categories', $categories);
        });
    }
}
