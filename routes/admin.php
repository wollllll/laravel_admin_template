<?php

use Illuminate\Support\Facades\Route;

/////////////////////////////////////
// dashboard
/////////////////////////////////////
Route::group(['namespace' => 'Dashboard'], function () {
    Route::resource('dashboard', 'DashboardController', ['only' => 'index']);
});

/////////////////////////////////////
// user
/////////////////////////////////////
Route::group(['namespace' => 'User'], function () {
    Route::resource('users', 'UserController', ['except' => ['show']]);
    Route::get('users/get', 'GetUserController')->name('users.get');
});

