<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainContoller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\View\Components\Admin;

Route::middleware('guest')->group(function(){
    Route::get('/',[AuthController::class,'login'])->name('login');
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
    Route::get('/mypost',[MainContoller::class,'MyPostPage'])->name('MyPostPage');
    Route::get('/AddExperience',[MainContoller::class,'AddExperiencePage'])->name('AddExperiencePage');
    Route::get('/EditProfile',[MainContoller::class,'EditProfilePage'])->name('EditProfilePage');
    Route::get('/jobs',[MainContoller::class,'JobsPage'])->name('JobsPage');
    Route::get('/ViewJob/{id}',[MainContoller::class,'ViewJob'])->name('ViewJob');
    Route::get('/ApplyJob/{id}',[MainContoller::class,'ApplyJobPage'])->name('ApplyJobPage');
    Route::get('/SubscribePrenium',[MainContoller::class,'SubscribePreniumPage'])->name('SubscribePreniumPage');
    Route::get('/subscribe/success',[MainContoller::class,'SubscribeSuccessPage'])->name('SubscribeSuccessPage');
    
    Route::post('/home/LikePost/{id}/Like',[MainContoller::class,'LikePost'])->name('LikePost');
    Route::post('/subscribe/submit',[MainContoller::class,'SubmitPreniumSubscription'])->name('SubmitPreniumSubscription');
    Route::post('/ApplyJob/{id}/Apply',[MainContoller::class,'SubmitJobApplication'])->name('SubmitJobApplication');
    Route::post('/EditProfile/{id}',[MainContoller::class,'UpdateProfile'])->name('UpdateProfile');
    Route::post('/profile/DeleteSkill/{id}/DeleteSkill',[MainContoller::class,'DeleteSkill'])->name('DeleteSkill');
    Route::post('/profile/DeleteExperience/{id}/DeleteExperience',[MainContoller::class,'DeleteExperience'])->name('DeleteExperience');
    Route::post('/AddExperience/{id}/AddExperience',[MainContoller::class,'AddExperience'])->name('AddExperience');
    Route::post('/mypost/DeletePost/{id}/DeletePost',[MainContoller::class,'DeletePost'])->name('DeletePost');
    Route::post('/profile//AddSkills',[MainContoller::class,'AddSkills'])->name('AddSkills');
    Route::post('/home/Comments/{id}/PostComment',[MainContoller::class,'PostComment'])->name('PostComment');
    Route::post('/NewPost',[MainContoller::class,'NewPostAction'])->name('NewPostAction');
});
Route::middleware(['auth','admin'])->group(function(){
    Route::get('/admin/home',[AdminController::class,'home'])->name('AdminHome');
    Route::get('/admin/ManageUsers',[AdminController::class,'ManageUsers'])->name('ManageUsers');
    Route::get('/admin/EditUser/{id}',[AdminController::class,'EditUser'])->name('EditUser');
    Route::get('/admin/ManagePost',[AdminController::class,'ManagePost'])->name('ManagePost');
    Route::get('/admin/ViewPost/{id}/Post',[AdminController::class,'ViewPost'])->name('ViewPost');
    Route::get('admin/AddSkill',[AdminController::class,'AddSkillPage'])->name('AddSkillPage');
    Route::get('/admin/Application',[AdminController::class,'ApplicationPage'])->name('ApplicationPage');
    Route::get('/admin/AllJobs',[AdminController::class,'AllJobsPage'])->name('AllJobsPage');

    Route::post('/admin/DeleteJob/{id}/DeleteJob',[AdminController::class,'DeleteJob'])->name('DeleteJob');
    Route::post('/admin/AddSkill',[AdminController::class,'AddSkill'])->name('AddSkill');
    Route::post('/admin/EditUser/{id}/EditAdmin',[AdminController::class,'EditUserRoleA'])->name('EditUserRoleA');
    Route::post('/admin/EditUser/{employee}/EditEmployee',[AdminController::class,'EditUserRoleE'])->name('EditUserRoleE');
    Route::post('/admin/EditUser/{user}/EditUser',[AdminController::class,'EditUserRoleU'])->name('EditUserRoleU');
    Route::post('/admin/ManageUsers/{delete}/DeleteUser',[AdminController::class,'DeleteUser'])->name('DeleteUser');
    Route::post('admin/ManageUser/{restore}/RestoreDeleted',[AdminController::class,'RestoreUser'])->name('RestoreUser');
    Route::post('/admin/DeletePost/{id}/DeletePost',[AdminController::class,'DeletePost'])->name('DeletePost');
});
Route::middleware(['auth','employee'])->group(function(){
    Route::get('/employee/home',[EmployeeController::class,'EmployeeHome'])->name('EmployeeHome');
    Route::get('/employee/AddJob',[EmployeeController::class,'AddJobPage'])->name('AddJobPage');
    Route::get('/employee/Application',[EmployeeController::class,'ApplicationsPage'])->name('ApplicationsPage');
    
    Route::post('/employee/AddJob',[EmployeeController::class,'AddJob'])->name('AddJob');
});