<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisterController;

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
// // Define resourceful routes for the PostController
// Route::resource('/', PostController::class)->names([
//   'index' => 'posts.index',
//   'create' => 'posts.create',
//   'store' => 'posts.store',
//   'show' => 'posts.show',
// ]);


// Define resourceful routes for the PostController
Route::resource('/', PostController::class)->only(['index', 'show'])
    ->names([
        'index' => 'posts.index',
        'show' => 'posts.show',
    ]);

// Manually define routes for the create and store methods
Route::get('/create', [PostController::class, 'create'])
    ->name('posts.create')
    ->middleware('can:admin-only');

Route::post('/store', [PostController::class, 'store'])
    ->name('posts.store')
    ->middleware('can:admin-only');




  Auth::routes();
  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');

 