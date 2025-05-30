<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Api\EnrollmentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\Api\CourseLecturerController;

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
Route::get('/students', [StudentController::class, 'index']);
Route::apiResource('courses', CourseController::class);
Route::get('/enrollments', [EnrollmentController::class, 'index']);

Route::get('/lecturers', [LecturerController::class, 'index']);
Route::post('/lecturers', [LecturerController::class, 'store']);
Route::get('/lecturers/{id}', [LecturerController::class, 'show']);
Route::put('/lecturers/{id}', [LecturerController::class, 'update']);
Route::delete('/lecturers/{id}', [LecturerController::class, 'destroy']);



Route::apiResource('course-lecturers', CourseLecturerController::class);
