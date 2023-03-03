<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AjaxController;
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

Route::get('/', 'PagesController@Power');
Route::get('/add', 'PagesController@addUser');
Route::get('/edit', 'PagesController@editUser');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('pages', 'PostsController');
Route::resource('posts', 'PostsController');

Route::get('/ajax-request', 'AjaxController@ajaxRequest');
Route::post('/get-subscriber', 'AjaxController@getSubscriber')->name('get-subscriber');;



Route::post('/pages', [App\Http\Controllers\PostsController::class, 'index'])->name('posts.index');

Route::post('/posts', [App\Http\Controllers\PostsController::class, 'store'])->name('posts.store');



