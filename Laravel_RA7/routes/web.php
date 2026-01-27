<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MOMPostController;

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

// Redirigir raíz a posts/all
Route::redirect('/', '/posts/all');

// Rutas para publicaciones
Route::controller(MOMPostController::class)->group(function () {
    Route::get('/posts/all', 'allUsersWithPosts')->name('posts.all');
    Route::get('/posts/user/{userId}', 'userPosts')->name('posts.user');
    Route::get('/posts/with-posts', 'usersWithPosts')->name('users.with-posts');
    Route::get('/posts/list', 'postsWithAuthors')->name('posts.list');
    Route::get('/posts/published', 'publishedPosts')->name('posts.published');
});
