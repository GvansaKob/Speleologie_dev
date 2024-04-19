<?php

use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\ModerateurController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/experiences',[ExperiencesController::class, 'create'])->name('experiences');
Route::post('/experiences',[ExperiencesController::class, 'post'])->name('experiences.store');

Route::get('/home', function () {
    return view('experiences');
});

Route::post('/experiences', [ExperiencesController::class, 'store']);
Route::get('/',[ExperiencesController::class, 'showConsultationExperience'])->name('show.experience');

Route::get('/dashboard',[ModerateurController::class, 'showModerateur'])->name('dashboard');




require __DIR__.'/auth.php';