<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/lession', 'lession')->name('lession');
    Route::get('/sharing', 'sharing')->name('sharing');
    Route::get('/researching', 'researching')->name('researching');
    Route::get('/forum', 'forum')->name('forum');
    Route::get('/about', 'about')->name('about');
});
