<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\groupByOwnersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//calling an api endpoint to post and get the data in same Controller

Route::controller(AttendanceController::class)->group(function (){
    
    Route::post('/store','store');

    Route::get('/show','index');

});

Route::get('/groupbyowners', [groupByOwnersController::class, 'challenge04']);


