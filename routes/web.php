<?php

use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\Web\TechnologyController;
use App\Http\Controllers\Web\CandidateController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WebController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::resource('technologies', TechnologyController::class);
    Route::resource('candidates', CandidateController::class);

    });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
