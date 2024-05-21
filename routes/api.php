<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\PerspectiveController;
use App\Http\Controllers\Api\v1\GoalController;
use App\Http\Controllers\Api\v1\IndicatorController;
use App\Http\Controllers\Api\v1\InitiativeController;
use App\Http\Controllers\Api\v1\ObjectiveController;

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


Route::group(['prefix' => 'v1'], function (){
    Route::resource('/perspective', PerspectiveController::class);
    Route::resource('/goal', GoalController::class);
    Route::resource('/indicator', IndicatorController::class);
    Route::resource('/initiative', InitiativeController::class);
    Route::resource('/objective', ObjectiveController::class);
});