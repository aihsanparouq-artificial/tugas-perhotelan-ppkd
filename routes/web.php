<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/', [GuestController::class, 'index']);


Route::middleware(['auth'])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // });

    Route::get('/register', [GuestController::class, 'create']);
    Route::post('/register', [GuestController::class, 'store']);

    Route::get('/guests', [GuestController::class, 'index']);
    Route::get('/guests/{id}', [GuestController::class, 'show']);

    Route::get('/guests/edit/{id}', [GuestController::class, 'edit']);
    Route::post('/guests/update/{id}', [GuestController::class, 'update']);
    Route::get('/guests/delete/{id}', [GuestController::class, 'destroy']);
    Route::get('/guests/print/{id}', [GuestController::class, 'print']);
});

// Route::get('/', function () {
//     return view('welcome');
// });
