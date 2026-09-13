<?php

use App\Http\Controllers\front\FrontPageController;
use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\ServiceController;
use App\Http\Controllers\front\PackageController;
use App\Http\Controllers\front\BlogController;
use App\Http\Controllers\front\BookingController;
use App\Http\Controllers\front\DestinationController;
use App\Http\Controllers\front\ExploreTourController;
use App\Http\Controllers\front\GalleryController;
use App\Http\Controllers\front\TravelGuideController;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\DashboardController;

use Illuminate\Support\Facades\Route;

// ================================================
// TEMPORARY TEST ROUTES (safe to delete once auth works)
// ================================================
Route::get('/rawtest', fn () => 'RAW OK');
Route::get('/viewtest', fn () => view('auth.login'));

// ================================================
// AUTHENTICATION ROUTES
// ================================================
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
    Route::post('/signup', [AuthController::class, 'signup']);
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// ================================================
// ADMIN ROUTES (role = 1 only)
// ================================================
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// ================================================
// FRONT ROUTES
// ================================================
Route::get('/', [FrontPageController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/packages', [PackageController::class, 'index'])->name('packages');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::post('/booking', [BookingController::class, 'submit'])->name('booking.submit');
Route::get('/destinations', [DestinationController::class, 'index'])->name('destinations');
Route::get('/explore-tours', [ExploreTourController::class, 'index'])->name('explore.tours');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/travel-guides', [TravelGuideController::class, 'index'])->name('travel.guides');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');