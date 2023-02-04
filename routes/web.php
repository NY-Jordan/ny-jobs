<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\JobController;

Route::get('/', [AppController::class, 'index'])->name('home');
Route::get('/about', [AppController::class, 'index'])->name('about');
Route::get('/contact', [AppController::class, 'index'])->name('contact');
Route::get('/offers', [AppController::class, 'offers'])->name('offers');
Route::get('/jobs', [AppController::class, 'jobs'])->name('jobs'); 
Route::get('/cvTheque', [AppController::class, 'cvTheque'])->name('cvTheque'); 
Route::post('/add/cv', [CurriculumController::class, 'saveCv'])->name('saveCurriculum'); 

Route::get('/job/details/{id}', [JobController::class, 'details'])->name('jobDetails'); 
Route::get('/cvTheque/load/{id}', [CurriculumController::class, 'load'])->name('loadcv'); 

Route::middleware(['auth'])->group(function (){
    Route::get('/account', [AccountController::class, 'index'])->name('account');
    Route::get('/settings', [AccountController::class, 'settings'])->name('settings');
    
    //profil route
    Route::post('/settings/profile/update/{id}', [AccountController::class, 'updateProfil'])->name('updateProfil'); 
    Route::post('/settings/profile/update/password/{id}', [AccountController::class, 'updatePassword'])->name('updatePassword'); 
    Route::get('/settings/profile/update/password', [AccountController::class, 'password'])->name('password'); 
    Route::post('/settings/profile/delete/{id}', [AccountController::class, 'delete'])->name('deleteAccount'); 


    //job for subscribe for a package or others
    Route::get('/offers/susbscribe/{id}', [AccountController::class, 'initSubscription'])->name('initSubscription');
    Route::get('/payement/status', [AccountController::class, 'statusSubscription'])->name('statusSubscription');

    //job routes
    Route::get('/job/add', [JobController::class, 'add'])->name('addJob'); 
    Route::post('/job/create', [JobController::class, 'create'])->name('createJob'); 
    Route::post('/job/delete/{id}', [JobController::class, 'delete'])->name('deleteJob'); 
    Route::get('/job/edit/{id}', [JobController::class, 'edit'])->name('editJob'); 
    Route::post('/job/update/{id}', [JobController::class, 'update'])->name('updateJob'); 
    Route::get('/job/search', [JobController::class, 'search'])->name('search'); 

});


require __DIR__.'/auth.php';
require __DIR__.'/api.php';
