<?php
use App\Http\Controllers\ComidaController;
use Illuminate\Support\Facades\Route;
Route::get('/', [ComidaController::class, 'index']);  
Route::resource('comidas', ComidaController::class);