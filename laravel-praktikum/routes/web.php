<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::get('/majors',[MajorController::class, 'index'])->name('majors.index');
Route::get('/majors/create',[MajorController::class, 'create'])->name('majors.create');
Route::get('/majors/{id}',[MajorController::class, 'show'])->name('majors.detail');
Route::get('/majors/{id}/edit',[MajorController::class, 'edit'])->name('majors.update');

// // Basic route
// Route::get('/students', function () {
//     return 'Students data...';
// });

// // Redirect route
// Route::redirect('/redirect', '/students');

// // Named route
// Route::get('/students/create', function () {
//     return 'Create student data';
// })->name('students.create');

// // Route with parameter
// Route::get('/students/{id}', function ($id) {
//     return 'Student ID: '.$id;
// });

// // connect to controller
// Route::get('/students', [StudentController::class, 'index']);
// Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
// Route::get('/students/{id}', [StudentController::class, 'show']);

// // neasted route
// Route::prefix('students')->group(function () {
//     Route::get('/', [StudentController::class, 'index']); // Menampilkan daftar siswa
//     Route::get('/create', [StudentController::class, 'create'])->name('students.create'); // Form tambah siswa
//     Route::get('/{id}', [StudentController::class, 'show']); // Menampilkan detail siswa
// });