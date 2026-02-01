<?php

use App\Http\Controllers\InternshipController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/welcome1', function () {
//     return view('welcome1');
// });
// Route::get('/welcome2', function () {
//     return view('welcome2');
// });
// Route::get('/welcome3', function () {
//     return view('welcome3');
// });
// Route::get('/social_media', function () {
//     return view('social_media');
// });
// Route::get('/welcome2', function- () {
//     return view('welcome2');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/internshipform', [InternshipController::class, 'index'])->name('internshipform.index');
    // Route::post('/internshipform', [InternshipController::class, 'store'])->name('internship.store');
    // Route::get('/internships', [InternshipController::class, 'showAll'])->name('internship.list');
});
Route::get('/application', function () {
    return view('application.index');
})->middleware(['auth', 'verified'])->name('application');

require __DIR__.'/auth.php';
Route::get('/internshipform', function () {
    return view('internshipform');
})->name('internshipform');

Route::get('/internshipform', [InternshipController::class, 'create'])->name('internshipform');
Route::post('/internshipform', [InternshipController::class, 'store'])->name('internshipform.store');
Route::get('/get-blocks/{district_code}', [InternshipController::class, 'getBlocks']);


