<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
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

Route::prefix('/')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('blog', BlogController::class);
});

// Route::get('/blog', [BlogController::class, 'index']);

// Route::get('/blog/create', [BlogController::class, 'create']);

// Route::get('/blog/edit', [BlogController::class, 'edit']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
