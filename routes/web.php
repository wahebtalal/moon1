<?php

use App\Http\Controllers\OptimizationController;
use Illuminate\Support\Facades\Route;

Route::get('/sss', function () {
    return view('main');
});
Route::get('/font/css', function() {

    // fetch your CSS and assign to $contents
    $contents='';

    foreach (\App\Models\Font::all() as $font) {
        $contents.=$font->css;
    }
//    foreach (setting('fonts_file') as $font) {
//        $contents.=$font['font_css'];
//    }
    $response = Response::make($contents);
    $response->header('Content-Type', 'text/css');
    return $response;
});

Route::get('/run-optimize', [OptimizationController::class, 'runOptimize']);

Route::get('/run-optimize-clear', [OptimizationController::class, 'runOptimizeClear']);
