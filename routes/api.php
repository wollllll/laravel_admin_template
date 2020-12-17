<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'User'], function () {
    /////////////////////////////////////
    // user
    /////////////////////////////////////
    Route::get('users/get_paginate', 'UserController@getPaginate');
});
