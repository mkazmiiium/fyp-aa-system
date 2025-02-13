<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/kict-dashboard', function () {
//     return view('kict-dashboard');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('kict-dashboard');
    })->name('kict-dashboard');

    Route::get('/teacher-list', function () {
        return view('teacher-list');
    })->name('teacher-list');

    Route::get('/student-list', function () {
        return view('student-list');
    })->name('student-dashboard');

});
