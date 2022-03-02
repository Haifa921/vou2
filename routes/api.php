<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DonationController;
use App\Http\Controllers\Api\DonationTypeController;
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


Route::controller(AuthController::class)->prefix('auth')->group(function () {
    Route::post('/login', 'login');
    Route::post('/logout', 'logout')->middleware(['auth:sanctum']);
    Route::post('/register', 'register')->middleware(['auth:sanctum']);
});

Route::apiResource('donation_types',DonationTypeController::class)->except(['destroy']);
Route::post('donation_types/{id}',[DonationTypeController::class,'update']);

Route::apiResource('donations',DonationController::class)->except(['destroy','update']);
Route::controller(DonationController::class)->prefix('donations_funds/donation_types')->group(function () {
    Route::get('/', 'fundsIndex');
    Route::get('/{id}', 'fundsShow');
});