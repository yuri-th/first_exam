<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    
    Route::get('/', [AuthController::class, 'index']);
 

//出退勤打刻
    Route::prefix('attendance')->group(function () {
    Route::get('/', [AttendanceController::class, 'getAttendance']);
    Route::post('/add', [AttendanceController::class, 'addAttendance']);
    Route::post('/sub', [AttendanceController::class, 'subAttendance']);
    Route::post('/start', [AttendanceController::class, 'startAttendance']);
    Route::post('/end', [AttendanceController::class, 'endAttendance']);
    
});

//休憩打刻
    Route::prefix('break')->group(function () {
    Route::post('/start', [RestController::class, 'startRest']);
    Route::post('/end', [RestController::class, 'endRest']);
});

});