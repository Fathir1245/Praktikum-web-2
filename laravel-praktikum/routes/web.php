<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\StudentController;
use Illuminate\View\View;

// Route ke halaman welcome
Route::get('/', function (): View {
    return view('welcome');
});

// Route ke controller
// Route::get('/students', [StudentController::class, 'index']);
// Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
// Route::get('/students/{id}', [StudentController::class, 'show']);

// Basic route
Route::get('/students', function (): string {
    return 'Students data...';
});

// Redirect route
Route::redirect('/redirect', '/students');

// Named route
Route::get('/students/create', function (): string {
    return 'Create student data';
})->name('students.create');

// Route with parameter
Route::get('/students/{id}', function ($id): string {
    return 'Student ID: ' . $id;
});


