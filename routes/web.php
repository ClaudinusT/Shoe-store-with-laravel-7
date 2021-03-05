<?php

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


Auth::routes();

Route::get('/dashboard', 'dashController@dash');
Route::get('/', 'dashController@dash');
Route::get('/search', 'dashController@search');

Route::middleware(['auth'])->group(function() {
    Route::get('/detail/{id}', 'detailController@detail');

    Route::middleware(['role:admin'])->group(function() {
        Route::get('/addShoe', 'addShoeController@show');
        Route::post('/inputShoe', 'addShoeController@input');
        
        Route::get('/updateShoe/{id}', 'updateDeleteController@update');
        Route::put('/update/{id}', 'updateDeleteController@reNew');
    });

    Route::middleware(['role:member'])->group(function() {
        Route::get('/addCart/{id}', 'cartController@addCart');
        Route::post('/insertCart', 'cartController@insertCart');

        Route::get('/viewCart', 'cartController@viewCart');
        
        Route::get('/editCart/{id}', 'cartController@editCart');

        Route::post('/updateShoeCart ', 'updateDeleteController@updateShoeCart');
        Route::post('/deleteCart', 'updateDeleteController@deleteCart');
        
        Route::post('/checkout', 'viewTransController@checkout');
        Route::get('/viewTrans', 'viewTransController@showTrans');
    });
});

