<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController; // Import Controller Anda

Route::get('/', [LandingPageController::class, 'index'])->name('landing');

// Rute untuk menerima submit form kontak
Route::post('/submit-contact', [LandingPageController::class, 'submitContactForm'])->name('contact.submit');