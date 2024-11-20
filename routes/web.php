<?php

use App\Http\Controllers\HeaderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Models\Header;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/headers', HeaderController::class)->names('header');
});

require __DIR__ . '/auth.php';

//-----------------backend routes----------------//

//  header routes

Route::get('/get-headers-data', [HeaderController::class, 'getHeaderData'])->name('get-header-data');

Route::resource('/headers', HeaderController::class)->names('header');

// project routes

Route::get('/get-projects-data', [ProjectController::class, 'getProjectData'])->name('get-project-data');

Route::resource('/projects', ProjectController::class)->names('project');


//-----------------frontend routes----------------//

Route::get('/anik', function () {
    // $header = Header::first();
    return view('master');
});