<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [\App\Http\Controllers\auth\AuthController::class, 'register'])->name('register');
    Route::get('/login', [\App\Http\Controllers\auth\AuthController::class, 'login'])->name('login');
    Route::post('/authenticate', [\App\Http\Controllers\auth\AuthController::class, 'authenticate'])->name('authenticate');
    Route::post('/register-store', [\App\Http\Controllers\auth\AuthController::class, 'authenticate'])->name('register.store');
});

Route::group(['middleware' => 'auth'], function (){
   Route::get('/logout', [\App\Http\Controllers\auth\AuthController::class, 'logout'])->name('logout.get');
   Route::post('/logout', [\App\Http\Controllers\auth\AuthController::class, 'logout'])->name('logout.post');

   Route::get('panel',  [\App\Http\Controllers\panel\PanelController::class, 'index'])->name('panel');

   Route::resource('ocaccounts', \App\Http\Controllers\panel\OcAccountController::class);
});



