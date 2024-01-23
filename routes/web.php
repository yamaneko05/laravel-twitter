<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
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

// Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect('/home');
    });

    Route::get('/home', function() {
        $posts = Post::where('parent_post_id', null)->get();
        return view('home', [
            'posts' => $posts
        ]);
    });

    Route::get('/profile', function() {
        return view('profile');
    });

    Route::get('/users/{user}', function(User $user) {
        return view('user', [
            'user' => $user
        ]);
    });

    Route::get('/posts/{post}', function(Post $post) {
        return view('post', [
            'post' => $post
        ]);
    });

    Route::post('/posts', [PostController::class, 'store']);
    Route::put('/posts/{post}', [PostController::class, 'update']);
    Route::delete('/posts/{post}', [PostController::class, 'destroy']);


    Route::post('/logout', [AuthController::class, 'logout']);
// });

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);
