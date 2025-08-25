<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    // echo "Hello SE";
    return view('welcome');
});



Route::get('/home', [PostController::class, 'home']);
Route::get('/create', [PostController::class, 'create'])->name('create');
Route::post('/posts', [PostController::class, 'store'])->name('store');
Route::get('/message', [PostController::class, 'message'])->name('message');
