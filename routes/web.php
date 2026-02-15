<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'Index'])->name('index');
Route::post('/appointment', [UserController::class, 'MakeAnAppointment'])->name('appointment');
Route::get('/alldoctors', [UserController::class, 'allDoctors'])->name('alldoctors');

Route::get('/dashboard', [UserController::class, 'Dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'admin')->group(function () {
   Route::get('/add_doctors', [AdminController::class, 'AddDoctors'])->name('add_doctors');
   Route::post('/post_doctors', [AdminController::class, 'PostDoctors'])->name('post_doctors');
   Route::get('/view_doctors', [AdminController::class, 'ViewDoctors'])->name('view_doctors');
   Route::get('/edit_doctor/{id}', [AdminController::class, 'EditDoctor'])->name('edit_doctor');
   Route::post('/edit_doctor/{id}', [AdminController::class, 'UpdateDoctor'])->name('update_doctor');
   Route::get('/delete_doctor/{id}', [AdminController::class, 'DeleteDoctor'])->name('delete_doctor');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
