<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;


Route::get('/', [AppController::class, 'index'])->name('home');
Route::get('/about', [AppController::class, 'index'])->name('about');
Route::get('/contact', [AppController::class, 'index'])->name('contact');
Route::get('/jobs', [AppController::class, 'index'])->name('jobs');
Route::middleware(['auth'])->group(function (){
    Route::get('/account', [AppController::class, 'index'])->name('account');
    Route::get('/account/jobs/add', [AppController::class, 'index'])->name('addJob');
});


require __DIR__.'/auth.php';
require __DIR__.'/api.php';
