<?php

use Illuminate\Support\Facades\Route;

/////////////////////////////////////
// Admin用ルーティング
/////////////////////////////////////
Route::group(['namespace' => 'Dashboard'], function () {
    /////////////////////////////////////
    // dashboard
    /////////////////////////////////////
    Route::resource('dashboard', 'DashboardController', ['only' => 'index']);
});

Route::group(['namespace' => 'User'], function () {
    /////////////////////////////////////
    // user
    /////////////////////////////////////
    Route::resource('users', 'UserController');
});

