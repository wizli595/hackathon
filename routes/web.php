<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/d', function() {
        // Common dashboard accessible to any authenticated user
            return Inertia::render('Dashboard');
    });

    Route::get('/admin', function() {
        Route::get('',function() {
            echo "Dashboard admin ";
        });
    })->middleware('role:admin');

    Route::get('/teacher', function() {
        Route::get('',function() {
            return "Dashboard  teacher ";
        });
    })->middleware('role:teacher');

    Route::get('/student', function() {
        Route::get('',function() {
            return "Dashboard  student ";
        });
    })->middleware('role:student');
});

Route::get('/home', function () {
    return Inertia::render('Home');
})->name('home');

require __DIR__ . '/auth.php';
