<?php

use App\Http\Controllers\ExperiencesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/experiences',[ExperiencesController::class, 'create'])->name('experiences');
Route::post('/experiences',[ExperiencesController::class, 'post'])->name('experiences.store');

Route::get('/home', function () {
    return view('experiences');
});

Route::post('/experiences', [ExperiencesController::class, 'store']);