<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
//外部にあるPostControllerクラスをインポート。
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
Route::get('/', [PostController::class, 'index'])->name('posts.index');


Route::get('/indexes', [PostController::class, 'index']);     
Route::get('/posts/{post}', [PostController::class ,'show']);
Route::get('/hosts', [UserController::class, 'host']); 
Route::get('/creates', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::delete('/posts/{post}', [PostController::class,'delete']);



Route::get('/members', [ProfileController::class, 'member']); 
Route::get('/users', [UserController::class, 'user']);
Route::get('/accounts/{user}', [UserController::class ,'account']);
Route::get('/profiles', [ProfileController::class, 'profile']);
Route::post('/keeps', [ProfileController::class, 'keep']);
Route::get('/remakes', [ProfileController::class, 'remake']);
Route::put('/profiles', [ProfileController::class, 'update']);




Route::get('/actives', [ProfileController::class, 'active']);
Route::post('/members', [ProfileController::class, 'save']);
Route::get('/users/{active}/edit', [ProfileController::class, 'reactive']);
Route::put('/users/{active}', [ProfileController::class, 'repost']);
Route::delete('/users/{active}', [ProfileController::class,'delete']);


Route::get('/chats/{user}', [HomeController::class, 'chat'])->name('chat'); 
Route::post('/add', [HomeController::class,'add'])->name('add');
Route::get('/result/ajax/{user}', [HomeController::class,'getData']);

Route::get('/dashboard',function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
