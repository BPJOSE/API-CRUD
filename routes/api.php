<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\studentController;

// Obtener
Route::get('/students', [studentController::class,'index']);

// Obtener uno
Route::get('/students/{id}', [studentController::class,'show']);

// crear 
Route::post('/students', [studentController::class, 'store']);

// actualizar
Route::put('/students/{id}', [studentController::class, 'update']);

// 
Route::patch('/students/{id}', [studentController::class, 'updatePartial']);

// Eliminar
Route::delete('/students/{id}',[studentController::class, 'destroy']);
