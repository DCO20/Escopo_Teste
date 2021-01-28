<?php

use App\Http\Controllers\Api\CandidatyController;
use App\Http\Controllers\Api\TechnologyController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:sanctum'], function(){
   
    Route::apiResource('candidates', CandidatyController::class);
    Route::apiResource('technologies', TechnologyController::class);
   
    });

Route::post("login",[UserController::class,'index']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
