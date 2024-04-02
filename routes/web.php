<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\MaterialLocationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LocationController;


Route::get('/', [DashboardController::class,'root']);

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', [DashboardController::class,'dashboard']);
    Route::get('/materials', [DashboardController::class,'materials']);
    Route::get('/settings', [DashboardController::class,'settings']);

    Route::get('/materials/list', [MaterialController::class,'list']);
    Route::get('/materials/create', [MaterialController::class,'create']);
    Route::post('/materials/create', [MaterialController::class,'store']);
    Route::get('/materials/{id}/edit', [MaterialController::class,'edit']);
    Route::put('/materials/{id}/edit', [MaterialController::class,'update']);
    Route::get('/materials/{id}/view', [MaterialController::class,'show']);

    Route::get('/materials/{id}/add-to-location', [MaterialLocationController::class,'create']);
    Route::post('/materials/{id}/add-to-location', [MaterialLocationController::class,'store']);
    Route::get('/materials/{id}/edit/{materialLocationId}', [MaterialLocationController::class,'edit']);
    Route::put('/materials/{id}/edit/{materialLocationId}', [MaterialLocationController::class,'update']);

    Route::get('/categories/list', [CategoryController::class,'list']);
    Route::get('/categories/create', [CategoryController::class,'create']);
    Route::post('/categories/create', [CategoryController::class,'store']);
    Route::get('/categories/{id}/edit', [CategoryController::class,'edit']);
    Route::put('/categories/{id}/edit', [CategoryController::class,'update']);
    Route::get('/categories/{id}/view', [CategoryController::class,'show']);

    Route::get('/locations/list', [LocationController::class,'list']);
    Route::get('/locations/create', [LocationController::class,'create']);
    Route::post('/locations/create', [LocationController::class,'store']);
    Route::get('/locations/{id}/edit', [LocationController::class,'edit']);
    Route::put('/locations/{id}/edit', [LocationController::class,'update']);
    Route::get('/locations/{id}/view', [LocationController::class,'show']);
});