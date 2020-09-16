<?php

use App\Http\Controllers\DetailController;
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

// home
Route::get('/', 'HomeController@index')
    ->name('home');
// details
Route::get('/details', 'DetailController@index')
    ->name('details');
// checkout
Route::get('/checkout', 'CheckoutController@index')
    ->name('checkout');
// checkout succses
Route::get('/checkout/succses', 'CheckoutController@succses')
    ->name('checkout-succses');

// admin dashboard
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

        Route::resource('travel-package', 'TravelPackageController');
        Route::resource('gallery', 'GalleryController');
    });

Auth::routes(['verify' => true]);
