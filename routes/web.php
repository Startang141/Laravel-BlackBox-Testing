<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'level_id:1'], function(){

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.home');

Route::resource('category', CategoryController::class);

Route::resource('product', ProductController::class);

Route::resource('order', OrderController::class);

Route::resource('users', UserController::class);

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/detail/{id}', [App\Http\Controllers\DetailController::class, 'index'])->name('detail');
