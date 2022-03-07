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
    return  'welcome';
});

 Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   return view('dashboard');
 })->name('dashboard');
 Route::get('/', [App\Http\Controllers\AssistanceFormController::class, 'index']);
 Route::get('/post/create1', [App\Http\Controllers\DonationController::class, 'create1'])->name('post.create1');
Route::get('/post/donate', [App\Http\Controllers\DonationController::class, 'create'])->name('post.donate');
Route::get('/post/donate1', [App\Http\Controllers\DonationController::class, 'create1'])->name('post.donate1');

Route::post('/post/store1', [App\Http\Controllers\DonationController::class, 'store'])->name('post.store1');
Route::post('/post/store3', [App\Http\Controllers\AssistanceFormController::class, 'store'])->name('post.store3');

 Route::get('/post/contact', [App\Http\Controllers\AssistanceFormController::class, 'contact'])->name('post.contact');
 Route::get('/post/about', [App\Http\Controllers\AssistanceFormController::class, 'about'])->name('post.about');

 Route::get('/accept', [App\Http\Controllers\AssistanceFormController::class, 'accept']);
 Route::get('/accept1', [App\Http\Controllers\AssistanceFormController::class, 'accept1']);
 Route::get('/login2', [App\Http\Controllers\AssistanceFormController::class, 'login2']);
 Route::get('/admin', [App\Http\Controllers\AssistanceFormController::class, 'admin']);
 Route::get('/users', [App\Http\Controllers\AssistanceFormController::class, 'users']);
 Route::get('/all', [App\Http\Controllers\DonationController::class, 'all']);
 Route::get('/patron', [App\Http\Controllers\DonationController::class, 'patron']);
 Route::get('/asdo', [App\Http\Controllers\AssistanceFormController::class, 'asdo']);
 Route::get('/admindo', [App\Http\Controllers\DonationController::class, 'admindo']);
 Route::get('/assistance', [App\Http\Controllers\AssistanceFormController::class, 'assistance']);
 Route::get('/voludo', [App\Http\Controllers\AssistanceFormController::class, 'voludo']);
 Route::get('/checkas', [App\Http\Controllers\AssistanceFormController::class, 'checkas']);
 Route::get('/login1', [App\Http\Controllers\AssistanceFormController::class, 'login1']);
 Route::get('/approve', [App\Http\Controllers\AssistanceFormController::class, 'approve']);
Route::get('/post/destroy/{id}', [App\Http\Controllers\AssistanceFormController::class, 'destroyadmin'])->name('post.destroyadmin');
Route::post('/post/store', [App\Http\Controllers\AssistanceFormController::class, 'storeadmin'])->name('post.storeadmin');
Route::post('/post/store2', [App\Http\Controllers\DonationController::class, 'store2'])->name('post.store2');