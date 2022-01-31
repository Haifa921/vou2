<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts');
Route::get('/post/create1', [App\Http\Controllers\PostController::class, 'create1'])->name('post.create1');
Route::get('/post/donate', [App\Http\Controllers\PostController::class, 'donate'])->name('post.donate');
Route::get('/post/volu1', [App\Http\Controllers\ControllerSurgery::class, 'volu1'])->name('post.volu1');
//Route::get('/post/create', 'PostController@create' )->name('post.create');
Route::post('/post/store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::post('/post/store1', [App\Http\Controllers\PostController::class, 'store1'])->name('post.store1');
Route::post('/post/store2', [App\Http\Controllers\PostController::class, 'store2'])->name('post.store2');
Route::post('/post/store3', [App\Http\Controllers\PostController::class, 'store3'])->name('post.store3');
Route::get('/post/contact', [App\Http\Controllers\PostController::class, 'contact'])->name('post.contact');
Route::get('/post/about', [App\Http\Controllers\PostController::class, 'about'])->name('post.about');