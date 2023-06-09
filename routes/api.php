<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserPortalController;

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
Route::get('/users/{userId}', [UserPortalController::class, 'getUserDetails']);
Route::get('get.student.name', [UserPortalController::class, 'getStudentInfo']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
