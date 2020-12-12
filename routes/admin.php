<?php

use Illuminate\Support\Facades\Route;

/////////////////////////////////////
// Admin用ルーティング
/////////////////////////////////////
Route::group(['namespace' => 'Dashboard'], function () {
    Route::resource('dashboard', 'DashboardController'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  );
});
