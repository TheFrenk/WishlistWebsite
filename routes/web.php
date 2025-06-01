<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', 'IndexController')->name('main.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Wishlist', 'prefix' => 'wishes'], function () {
   Route::get('/create', 'IndexController')->name('wishlist.create');
});
