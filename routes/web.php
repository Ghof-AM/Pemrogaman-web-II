<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController; // Import Controller Anda

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rute untuk menampilkan landing page
Route::get('/', [LandingPageController::class, 'index'])->name('landing');

// Rute opsional jika Anda ingin form kontak mengirim data ke backend Laravel
// Route::post('/submit-contact', [LandingPageController::class, 'submitContactForm'])->name('contact.submit');