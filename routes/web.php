<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

Route::get('/', [GuestController::class, 'index']);

Route::get('/register', [GuestController::class, 'create']);
Route::post('/register', [GuestController::class, 'store']);

Route::get('/guests', [GuestController::class, 'index']);
Route::get('/guests/{id}', [GuestController::class, 'show']);

Route::get('/guests/edit/{id}', [GuestController::class, 'edit']);
Route::post('/guests/update/{id}', [GuestController::class, 'update']);
Route::get('/guests/delete/{id}', [GuestController::class, 'destroy']);
Route::get('/guests/print/{id}', [GuestController::class, 'print']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route::get('/', function () {
//     return view('welcome');
// });
