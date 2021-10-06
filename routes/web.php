<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('getAllProjects', [ProjectController::class, 'getAllProjects']);
Route::get('insertNewProject', [ProjectController::class, 'insertProject']);
Route::get('insertUser', [ProjectController::class, 'insertUser']);
Route::get('insertCompanies', [ProjectController::class, 'insertCompanies']);
Route::get('insertCity', [ProjectController::class, 'insertCity']);
Route::get('updateProject', [ProjectController::class, 'updateProject']);
Route::get('deleteUser', [ProjectController::class, 'deleteUser']);