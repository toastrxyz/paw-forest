<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\AdoptionController;

Route::get('/', [AnimalController::class, 'home'])->name('home');


Route::get('/gallery', [AnimalController::class, 'index'])->name('gallery.index');
Route::get('/gallery/{id}', [AnimalController::class, 'show'])->name('gallery.show');

Route::get('/donations', [DonationController::class, 'create'])->name('donations.create');
Route::post('/donations', [DonationController::class, 'store'])->name('donations.store');

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'lv'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});

Route::middleware(['auth'])->group(function () {
    
    Route::get('/profile', [UserController::class, 'show'])->name('profile');
    Route::put('/profile/update', [UserController::class, 'update'])->name('profile.update');
    Route::put('/profile/password', [UserController::class, 'updatePassword'])->name('profile.password');
    Route::delete('/profile/delete', [UserController::class, 'destroy'])->name('profile.delete');
    Route::post('/visits', [VisitController::class, 'store'])->name('visits.store');
    Route::post('/adoptions', [AdoptionController::class, 'store'])->name('adoptions.store');
    
    Route::middleware(['employee'])->group(function () {
        Route::view('/dashboard', 'pages.dashboard')->name('dashboard');
        Route::view('/admin/animals', 'pages.admin.admin-animals');
        Route::view('/admin/applications', 'pages.admin.admin-applications');
        Route::view('/admin/medicine', 'pages.admin.admin-medicine');
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/users', [AdminController::class, 'index'])->name('admin.users.index');
        Route::get('/admin/donations', [DonationController::class, 'index'])->name('admin.donations.index');
        Route::get('/admin/donations/{id}', [DonationController::class, 'show'])->name('admin.donations.show');
        Route::view('/admin/locations', 'pages.admin.admin-locations');
    });
});

require __DIR__.'/settings.php';