<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

use App\Http\Controllers\ProfilController;
Route::get('/profil', [ProfilController::class, 'index']);
Route::post('/send-contact', [ProfilController::class, 'sendContact'])->name('send.contact');