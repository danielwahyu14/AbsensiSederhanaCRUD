<?php

use App\Http\Controllers\Controller1;
use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/create', [Controller1::class, 'create']);
    Route::post('/save', [Controller1::class, 'save']);

    Route::get('/read', [Controller1::class, 'read']);
    Route::get('/update/{nim}', [Controller1::class, 'update']);
    Route::post('/edit', [Controller1::class, 'edit']);
    
    Route::get('/delete/{nim}', [Controller1::class, 'delete']);
    
    Route::get('/view', [Controller1::class, 'view']);
});
Route::delete('/logout', [Controller1::class, 'logout']);

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Upload file foto
// Route::get('/upload', [UploadController::class, 'showForm']);
// Route::post('/upload', [UploadController::class, 'uploadFile'])->name('upload');