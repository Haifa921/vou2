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
Route::post('/post/store4', [App\Http\Controllers\PostController::class, 'store4'])->name('post.store4');
Route::post('/post/store1', [App\Http\Controllers\PostController::class, 'store1'])->name('post.store1');
Route::post('/post/store2', [App\Http\Controllers\PostController::class, 'store2'])->name('post.store2');
Route::post('/post/store3', [App\Http\Controllers\PostController::class, 'store3'])->name('post.store3');
Route::get('/post/contact', [App\Http\Controllers\PostController::class, 'contact'])->name('post.contact');
Route::get('/post/about', [App\Http\Controllers\PostController::class, 'about'])->name('post.about');
Route::get('/post/surgery', [App\Http\Controllers\ControllerSurgery::class, 'surgery'])->name('post.surgery');
Route::get('/post/new', [App\Http\Controllers\PostController::class, 'newdonate'])->name('post.newdonate');
Route::get('/admin', [App\Http\Controllers\Poor::class, 'admin']);
Route::get('/post/destroy/{id}', [App\Http\Controllers\Poor::class, 'destroy'])->name('post.destroy');
Route::post('/post/store', [App\Http\Controllers\Poor::class, 'store'])->name('post.store');
Route::get('/post/store/approve/{post}', [App\Http\Controllers\Poor::class, 'approve'])->name('post.approve');
Route::get('/posts', [App\Http\Controllers\Poor::class, 'index'])->name('posts');
Route::get('/post/submit', [App\Http\Controllers\payment::class, 'submit'])->name('post.submit');
Route::get('/instamojo_redirect', [App\Http\Controllers\payment::class, 'instamojo_redirect']);