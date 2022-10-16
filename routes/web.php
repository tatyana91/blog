<?php

use App\Http\Controllers\Categories;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;
use App\Http\Controllers\Comments;
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

Route::get('/', function(){
    return view('welcome');
})->name('home');

Route::resource('/posts', Posts::class);
Route::controller(Posts::class)->group(function(){
    Route::get('/posts/trash', 'trash')->name('posts.trash');
    Route::put('/posts/{post}/restore', 'restore')->name('posts.restore');
});

Route::resource('/posts/{post}/comments', Comments::class);

Route::resource('/categories', Categories::class);
Route::controller(Categories::class)->group(function(){
    Route::get('/categories/trash', 'trash')->name('categories.trash');
    Route::put('/categories/{category}/restore', 'restore')->name('categories.restore');
});
