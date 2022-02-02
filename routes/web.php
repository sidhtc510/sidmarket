<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CabinetController;
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
 * https://laravelarticle.com/laravel-8-authentication-tutorial
 * 
 */
Auth::routes();




/**
 * 
 *  FrontEnd controllers
 * 
 * 
 */
Route::get('/', [MainController::class, 'index'])->name('mainPage');
Route::get('/dashboard', [CabinetController::class, 'index'])->name('dashboard');



  
/**
 * 
 * Admin controllers
 */
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
  Route::get('/', [adminMainController::class, 'index'])->name('admin.index');
    // Route::resource('/categories', CategoryController::class);
    // Route::resource('/tags', TagController::class);
    // Route::resource('/posts', PostController::class);
    // Route::resource('/users', AdminUserController::class);
    // Route::get('/delImg', [PostController::class, 'destroyImg'])->name('destroyImage');
    // Route::get('/cc', [ClearCacheController::class, 'index'])->name('clearCache');

   
    // Route::resource('/sliders', SliderController::class);
});
/****************************************************/




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
