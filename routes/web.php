<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CabinetController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryFrontController;
use App\Http\Controllers\admin\MainController as adminMainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * 
 *  Laravel Auth
 * https://laravelarticle.com/laravel-8-authentication-tutorial    -- *** AUTH USER
 * https://www.youtube.com/watch?v=oOGG7zViYng&list=WL&index=3     -- *** Email Verify
 */
Auth::routes(['verify' => true]);




/**
 * 
 *  FrontEnd controllers
 * 
 * 
 */
Route::get('/', [MainController::class, 'index'])->name('mainPage');
Route::resource('/dashboard', CabinetController::class);
Route::resource('/product', ProductController::class);

Route::get('/category/{slug}', [CategoryFrontController::class, 'show'])->name('categories.single');


  
/**
 * 
 * Admin controllers
 */
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
  Route::get('/', [adminMainController::class, 'index'])->name('admin.index');
    // Route::resource('/categories', CategoryController::class);
    // Route::resource('/tags', TagController::class);
    // Route::resource('/product', ProductController::class);
    // Route::resource('/users', AdminUserController::class);
    // Route::get('/delImg', [PostController::class, 'destroyImg'])->name('destroyImage');
    // Route::get('/cc', [ClearCacheController::class, 'index'])->name('clearCache');

   
    // Route::resource('/sliders', SliderController::class);
});
/****************************************************/