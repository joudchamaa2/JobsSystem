<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainContoller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/',[MainContoller::class,'home'])->name('HomePage');



Route::middleware('guest')->group(function(){
    Route::get('/login',[AuthController::class,'login'])->name('loginPage');
    Route::get('/register',[AuthController::class,'register'])->name('registerPage');

    Route::post('/login',[AuthController::class,'loginAction'])->name('loginAction');
    Route::post('/register',[AuthController::class,'registerAction'])->name('registerAction');
});

Route::middleware('auth')->group(function(){
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});
Route::middleware(['auth','admin'])->group(function(){
    Route::get('/admin/home',[AdminController::class,'home'])->name('AdminHome');
});