<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CurriculumController;

Route::get('/', [AppController::class, 'index'])->name('home');
Route::get('/about', [AppController::class, 'index'])->name('about');
Route::get('/contact', [AppController::class, 'index'])->name('contact');
Route::get('/offers', [AppController::class, 'offers'])->name('offers');
Route::get('/jobs', [AppController::class, 'index'])->name('jobs'); 
Route::get('/job/add', [AppController::class, 'addJob'])->name('addJob'); 
Route::get('/cvTheque', [AppController::class, 'cvTheque'])->name('cvTheque'); 
Route::post('/add/cv', [CurriculumController::class, 'saveCv'])->name('saveCurriculum'); 

Route::middleware(['auth'])->group(function (){
    Route::get('/account', [AppController::class, 'index'])->name('account');
});


require __DIR__.'/auth.php';
require __DIR__.'/api.php';
