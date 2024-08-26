<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAPIController;
use App\Http\Controllers\VaccineAPIController;
use App\Http\Controllers\FacultyAPIController;
use App\Http\Controllers\VaccineRecordAPIController;
use App\Http\Controllers\ProgramAPIController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('/student', StudentAPIController::class);
Route::resource('/vaccine', VaccineAPIController::class);
Route::resource('/faculty', FacultyAPIController::class);
Route::resource('/progarm', ProgramAPIController::class);
Route::resource('/vaccine-record', VaccineRecordAPIController::class);