<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainContoller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;




Route::middleware('guest')->group(function(){
    Route::get('/',[AuthController::class,'login'])->name('loginPage');
    Route::get('/register',[AuthController::class,'register'])->name('registerPage');

    Route::post('/login',[AuthController::class,'loginAction'])->name('loginAction');
    Route::post('/register',[AuthController::class,'registerAction'])->name('registerAction');
});

Route::middleware('auth')->group(function(){
    Route::get('/home',[MainContoller::class,'home'])->name('HomePage');
    Route::get('NewPost',[MainContoller::class,'NewPost'])->name('NewPost');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/home/comments/{id}/GetComment',[MainContoller::class,'GetComment'])->name('GetComment');
    Route::get('/profile/{id}',[MainContoller::class,'profilePage'])->name('profilePage');
    
    Route::post('/profile/AddSkills',[MainContoller::class,'AddSkills'])->name('AddSkills');
    Route::post('/home/Comments/{id}/PostComment',[MainContoller::class,'PostComment'])->name('PostComment');
    Route::post('/NewPost',[MainContoller::class,'NewPostAction'])->name('NewPostAction');
});
Route::middleware(['auth','admin'])->group(function(){
    Route::get('/admin/home',[AdminController::class,'home'])->name('AdminHome');
    Route::get('/admin/ManageUsers',[AdminController::class,'ManageUsers'])->name('ManageUsers');
    Route::get('/admin/EditUser/{id}',[AdminController::class,'EditUser'])->name('EditUser');
    Route::get('/admin/ManagePost',[AdminController::class,'ManagePost'])->name('ManagePost');
    Route::get('/admin/ViewPost/{id}/Post',[AdminController::class,'ViewPost'])->name('ViewPost');

    Route::post('/admin/EditUser/{id}/EditAdmin',[AdminController::class,'EditUserRoleA'])->name('EditUserRoleA');
    Route::post('/admin/EditUser/{employee}/EditEmployee',[AdminController::class,'EditUserRoleE'])->name('EditUserRoleE');
    Route::post('/admin/EditUser/{user}/EditUser',[AdminController::class,'EditUserRoleU'])->name('EditUserRoleU');
    Route::post('/admin/ManageUsers/{delete}/DeleteUser',[AdminController::class,'DeleteUser'])->name('DeleteUser');
    Route::post('admin/ManageUser/{restore}/RestoreDeleted',[AdminController::class,'RestoreUser'])->name('RestoreUser');
    Route::post('/admin/DeletePost/{id}/DeletePost',[AdminController::class,'DeletePost'])->name('DeletePost');
});