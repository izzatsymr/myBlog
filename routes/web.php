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
});

Route::get('/users', [UserController::class, 'index'])->name('users');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');

Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');

Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');

Route::put('/blog/{id}/update', [BlogController::class, 'update'])->name('blog.update');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
