<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// blog2.test
Route::get('/', function () {
    // return "index";
    // return ['apredible' => '.com'];
    // return view('welcome');
});

// apuntamos a las vistas: view segun los endpoints
Route::view('/', 'welcome') -> name('home');

Route::view('contacto', 'contacto') -> name('contact');

Route::get('blog',[PostController::class, 'index']) -> name('blog');

Route::view('nosotros', 'nosotros') -> name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
