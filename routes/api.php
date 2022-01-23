<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApiPostController;
use App\Http\Controllers\ApiDonateController;
use App\Http\Controllers\ControllerSurgery;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);
Route::get('/loginshow/{id}', [AuthController::class,'show']);

Route::post('/post', [ApiPostController::class,'store']);
Route::get('/posts', [ApiPostController::class,'index']);
Route::get('/posts/{id}', [ApiPostController::class,'show']);

Route::post('/postd', [ApiDonateController::class,'store']);
Route::get('/postsd', [ApiDonateController::class,'index']);
Route::get('/postsd/{id}', [ApiDonateController::class,'show']);

Route::post('/surgerysave', [ControllerSurgery::class,'store']);
Route::get('/surgeryall', [ControllerSurgery::class,'index']);
Route::get('/surgeryshow/{id}', [ControllerSurgery::class,'show']);
