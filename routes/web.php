<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Версия апи 1";
    return view('welcome');
});


Route::prefix('test')->controller(App\Http\Controllers\TestController::class)->group(function () {
    Route::get('/', 'index');
  });