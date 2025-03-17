<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\studentController;

// Obtener
Route::get('/students', [studentController::class,'index']);

// Obtener uno
Route::get('/students/{student}', [studentController::class, 'show']);

// crear 
Route::post('/students', [studentController::class, 'store']);

// actualizar
Route::put('/students/{student}', [studentController::class, 'update']);

// actualizar uno 
Route::patch('/students/{student}', [studentController::class, 'updatePartial']);

// Eliminar
Route::delete('/students/{student}', [studentController::class, 'destroy']);
