<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MaterialController;

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', [DashboardController::class,'index']);

    Route::get('/materials', [MaterialController::class,'index']);
    Route::get('/materials/list', [MaterialController::class,'list']);
    Route::get('/materials/create', [MaterialController::class,'create']);
    Route::post('/materials/create', [MaterialController::class,'store']);
    Route::get('/materials/{id}/edit', [MaterialController::class,'edit']);
    Route::put('/materials/{id}/edit', [MaterialController::class,'update']);
    Route::get('/materials/{id}/view', [MaterialController::class,'show']);
});