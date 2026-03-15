<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;


Route::get('/', function () {
    return view('welcome');
    });
    Route::get('/', [GuestController::class,'index']);
    
    Route::get('/register', [GuestController::class,'create']);
    Route::post('/register', [GuestController::class,'store']);
    
    Route::get('/guests', [GuestController::class,'index']);
    Route::get('/guests/{id}', [GuestController::class,'show']);
