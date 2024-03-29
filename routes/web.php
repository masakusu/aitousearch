<?php

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');


Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    
    
    Route::group(['prefix' => 'users/{id}'], function () {
        Route::get('favorites', 'UsersController@favorites')->name('users.favorites');
        Route::get('goods', 'UsersController@goods')->name('users.goods');
        Route::delete('delete', 'UsersController@deleteData')->name('users.delete');
    });

    Route::group(['prefix' => 'katanas/{id}'], function () {
        Route::post('favorite', 'FavoritesController@store')->name('favorites.favorite');
        Route::delete('unfavorite', 'FavoritesController@destroy')->name('favorites.unfavorite');
    });
    
    Route::group(['prefix' => 'zatudans/{id}'], function () {
        Route::post('good', 'GoodsController@store')->name('goods.good');
        Route::delete('ungood', 'GoodsController@destroy')->name('goods.ungood');
    });
    
    Route::resource('zatudans', 'ZatudansController', ['only' => ['index', 'show', 'create', 'edit', 'store', 'update', 'destroy']]);
    Route::resource('katanas', 'KatanasController', ['only' => ['index', 'history', 'show', 'create', 'edit', 'store','update', 'destroy']]);
    
    Route::get('history', 'KatanasController@history')->name('katanas.history');
    Route::get('/', 'UsersController@welcome');
});
