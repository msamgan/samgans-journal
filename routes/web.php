<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
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

Route::get('/', [PostController::class, 'listing'])->name('listing');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/projects', 'ProjectController@index')->name('projects');
Route::get('/{post}', [PostController::class, 'post'])->name('post');
Route::get('/tag/{tag}', [TagController::class, 'posts'])->name('tag.posts');
Route::get('/page/{page}', [PageController::class, 'page'])->name('page');
Route::get('/author/{author}', [AuthorController::class, 'authorPage'])->name('author.page');

/**
 * redirecting category links to tag.
 */
Route::get('category/{tag}', [TagController::class, 'categoryToTag']);

/**
 * redirecting sub category links to tag.
 */
Route::get('category/{tagPrimary}/{tag}', [TagController::class, 'categoryToSubTag']);

