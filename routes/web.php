<?php

use App\Http\Controllers\HeaderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';


//  header toutes

Route::resource('/headers', HeaderController::class)->names('header');

Route::post('/headers-update/{header}', [HeaderController::class, 'updateHeader'])->name('update.header');

Route::get('/get-headers-data', [HeaderController::class, 'getHeaderData'])->name('get-header-data');