<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tests/test', [TestController::class, 'index']);
Route::get('test2', [TestController::class, 'index2'])->name('test2');
Route::post('test2', [TestController::class, 'index2']);
