<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\home;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\PostController;
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
});
Route::get('/blog',[PostController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}',[PostController::class, 'show'])->name('blog.show');

Route::get('/home',[home::class , 'index'])->name('home');
require __DIR__.'/auth.php';    
