<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;


Route::middleware(['auth'])->group(function (){
    Route::get('/', [AppController::class, 'index'])->name('index');
    Route::get('/settings', [AppController::class, 'settings'])->name('settings');
    Route::post('update-logo', [AppController::class, 'updateLogo'])->name('logo.update');
    Route::get('/pages', [AppController::class, 'pages'])->name('pages');
    Route::get('/news', [AppController::class, 'news'])->name('news');
    Route::get('/documentation-decision', [AppController::class, 'index'])->name('doc_decision');
    Route::get('/', [AppController::class, 'index'])->name('index');
    Route::get('/', [AppController::class, 'index'])->name('index');
});


require __DIR__.'/auth.php';
