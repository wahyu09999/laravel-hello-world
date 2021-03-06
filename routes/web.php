<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
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

// Auth::Routes();

Route::resource('articles', ArticleController::class);

Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf'])->name('cetak_pdf');


Auth::routes();
Route::get('/',[PostController::class, 'index']);
Route::get('/home', [App\Http\Controllers\homeController::class, 'index'])->name('home');