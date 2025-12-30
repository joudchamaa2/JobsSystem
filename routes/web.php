<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainContoller;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainContoller::class,'home'])->name('HomePage');



Route::middleware('guest')->group(function(){
    Route::get('/login',[AuthController::class,'login'])->name('loginPage');
    Route::get('/register',[AuthController::class,'register'])->name('registerPage');
});

Route::middleware('auth')->group(function(){
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});