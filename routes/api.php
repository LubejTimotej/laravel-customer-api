<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StrankaController;
use App\Http\Controllers\StrankaController2;
use App\Http\Controllers\StrankaController3;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API1
Route::get('/api1/{id}', [StrankaController::class, 'getApi1']);
Route::post('/api1', [StrankaController::class, 'insertApi1']);
Route::put('/api1/{id}', [StrankaController::class, 'updateApi1']);
Route::delete('/api1/{id}', [StrankaController::class, 'deleteApi1']);

// API2
Route::get('/api2/{id}', [StrankaController2::class, 'getApi2']);
Route::post('/api2', [StrankaController2::class, 'insertApi2']);
Route::put('/api2/{id}', [StrankaController2::class, 'updateApi2']);
Route::delete('/api2/{id}', [StrankaController2::class, 'deleteApi2']);

// API3
Route::get('/api3/{id}', [StrankaController3::class, 'getApi3']);
Route::post('/api3', [StrankaController3::class, 'insertApi3']);
Route::put('/api3/{id}', [StrankaController3::class, 'updateApi3']);
Route::delete('/api3/{id}', [StrankaController3::class, 'deleteApi3']);