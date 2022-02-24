<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\ReservationMailController;
use App\Http\Controllers\Admin\SliderController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify'=>true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/reservation-mail', [ReservationMailController::class, 'sendMail']);
// Route::group( 'prefix'->'admin' ,'middleware'->'auth');
Route::group(['prefix'=>'admin','middleware'=>'auth', 'middleware'=>'verified'],function () {
   
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('slider',SliderController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('item',ItemController::class);
    Route::resource('reservation',ReservationController::class);
});
