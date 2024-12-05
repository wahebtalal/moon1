<?php

use Illuminate\Support\Facades\Route;

Route::get('/h', function () {
    return view('home');
});
