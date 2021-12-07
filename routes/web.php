<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    Feed\PostController
};

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

Route::middleware(['auth'])->group(function(){
    Route::get('/posts', [PostController::class, 'index'])->name('posts');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/post/{id}/details', [PostController::class, 'show'])->name('post.show');
    Route::put('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::delete('/post/{id}/delete', [PostController::class, 'delete'])->name('post.delete');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';
