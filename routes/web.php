<?php

use App\Http\Controllers\ArticleController;

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

Route::get('/',  [ArticleController::class, 'index'])->name('index');
Route::get('/articles', [ArticleController::class, 'articleAll'])->name('articles');
Route::get('/articles/{slug}', [ArticleController::class, 'more'])->name('more');

Route::post('/articles/view', [ArticleController::class, 'incrementViews'])->name('views.increment');

