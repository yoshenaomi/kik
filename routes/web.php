<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;

use Illuminate\Support\Facades\Route;


Route::get('/', [AuthController::class,"loginView"]);
Route::get('/Register', [AuthController::class,"registerView"]);
Route::post('/do-login', [AuthController::class,"doLogin"]);
Route::post('/do-register', [AuthController::class,"doRegister"]);

Route::get('/Logout', [AuthController::class,"logout"]);

Route::get('/Dashboard', [MahasiswaController::class,"index"]);

