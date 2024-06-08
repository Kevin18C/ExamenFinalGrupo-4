<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExamenFinalController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Auth::routes();


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::resource('registroalumnos', ExamenFinalController::class)->middleware('auth');
