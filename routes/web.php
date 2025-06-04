<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', 'IndexController')->name('main.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Wishlist', 'prefix' => 'wishes'], function () {
   Route::get('/create', 'IndexController')->name('wishlist.create');
   Route::post('/', 'StoreController')->name('wishlist.store');
   Route::get('/show/{wishlist:slug}', 'ShowController@show')->name('wishlist.show');

   Route::group(['namespace' => 'WishlistItem', 'prefix' => 'items'], function () {
      Route::patch('{item}/complete', 'WishlistItemController@markAsCompleted')->name('wishlist.items.complete');
   });
});

Route::group(['namespace' => 'App\Http\Controllers\Personal', 'prefix' => 'personal'], function () {
   Route::get('/', 'IndexController')->name('personal.main.index');
});
