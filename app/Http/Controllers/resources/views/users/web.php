<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// مسارات إدارة المستخدمين (Users CRUD)
Route::get('/users', [UserController::class, 'index']);
Route::post('/users/create', [UserController::class, 'create']);
Route::get('/users/edit/{id}', [UserController::class, 'edit']);
Route::post('/users/update', [UserController::class, 'update']);
Route::get('/users/destroy/{id}', [UserController::class, 'destroy']);
