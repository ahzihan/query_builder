<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index']);
Route::get('/first', [PostController::class, 'FirstRecord']);
Route::get('/pluck', [PostController::class, 'PluckValue']);
Route::get('/select', [PostController::class, 'UseSelectQuery']);
Route::post('/insert', [PostController::class, 'InsertData']);
Route::put('/update/{id}', [PostController::class, 'updateData']);
Route::delete('/delete/{id}', [PostController::class, 'deleteData']);
Route::get('/condition', [PostController::class, 'ConditionalData']);
Route::get('/min_to_read', [PostController::class, 'MinToRead']);

Route::get('/distinct', [UserController::class, 'index']);
Route::get('/whereNot', [UserController::class, 'WhereNot']);
Route::get('/exist', [UserController::class, 'ExistsData']);
Route::get('/doseNotExist', [UserController::class, 'DoesNotExistsData']);
