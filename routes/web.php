<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/post/{post}', [HomeController::class, 'post'])->name('joonas');



Route::middleware(['auth'])->group(function() {
    Route::get('/post/{post}/comment', [CommentController::class, 'create'])->name('comment');
    Route::post('post/{post}/comment', [CommentController::class, 'store'])->name('comment.store');
    Route::get('/admin/posts', [PostController::class, 'index' ])->name('admin.posts.index');
    Route::get('/admin/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('/admin/posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('/admin/posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::post('/admin/posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::get('/admin/posts/{post}/delete', [PostController::class, 'destroy'])->name('admin.posts.destroy');

    Route::get('/user/profile', function() {
        return view('profile');
    })->name('profile');
});
