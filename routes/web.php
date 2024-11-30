<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TravelController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\TravelController::class, 'home'])->name('home');
Route::get('/', [App\Http\Controllers\TravelController::class, 'index'])->name('index');
Route::get('/trips', [App\Http\Controllers\TravelController::class, 'trips'])->name('trips');
Route::get('/About-us', [App\Http\Controllers\TravelController::class, 'About'])->name('About');
Route::get('/Admin-dashboard', [App\Http\Controllers\TravelController::class, 'Admdashboard'])->name('Admindashboard');
Route::get('/User-dashboard', [App\Http\Controllers\TravelController::class, 'Userdashboard'])->name('Userdashboard');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('/Admin-dashboard', [TravelController::class, 'createTrips'])->name('CreateTrips');

require __DIR__.'/auth.php';
