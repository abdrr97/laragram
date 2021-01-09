<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfilesController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

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
    $profiles = App\Models\Profile::all();
    return view('welcome', ['profiles' => $profiles]);
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile');
Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [ProfilesController::class, 'update'])->name('profile.update');

Route::get('/p/create', [PostsController::class, 'create'])->name('posts.create');
Route::post('/p/create', [PostsController::class, 'store'])->name('posts.store');
Route::get('/p/{id}', [PostsController::class, 'show'])->name('posts.show');
