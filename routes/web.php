<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController; 
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

Route::get('/', function () {
    return view('top');
});

Route::get('/indexes', [PostController::class, 'index']);     
Route::get('/posts/{post}', [PostController::class ,'show']);
Route::get('/hosts', [PostController::class, 'host']); 
Route::get('/creates', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);


Route::get('/members', [ProfileController::class, 'member']); 
Route::get('/users', [ProfileController::class, 'user']);
Route::get('/users/{profile}', [ProfileController::class ,'detail']);
Route::get('/profiles', [ProfileController::class, 'profile']);
Route::post('/makes', [ProfileController::class, 'keep']);
Route::get('/remakes', [ProfileController::class, 'remake']);
Route::put('/users/{profile}', [ProfileController::class, 'update']);


Route::get('/dashboard',function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
