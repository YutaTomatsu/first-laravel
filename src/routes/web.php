<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\MiddlewareController;

Route::get('/', [TestController::class, 'index']);
Route::get('/hello', [HelloController::class, 'index']);
Route::post('/', [TestController::class, 'post']);
Route::get('/middleware', [MiddlewareController::class, 'index']);
Route::post('/middleware', [MiddlewareController::class, 'post'])->middleware('first');
