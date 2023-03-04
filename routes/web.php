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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('pages', 'PostsController');
Route::resource('posts', 'PostsController');

Route::get('/ajax-request', 'AjaxController@ajaxRequest');
Route::post('/get-subscriber', 'AjaxController@getSubscriber')->name('get-subscriber');
Route::post('/get-number',      'AjaxController@getNumber')->name('get-number');
Route::post('/get-name',      'AjaxController@getName')->name('get-name');
Route::post('/save-number',      'AjaxController@saveNum')->name('save-number');
Route::post('/del-user',      'AjaxController@delUser')->name('del-user');
Route::post('/edit-user',      'AjaxController@editUser')->name('edit-user');
Route::post('/edit-number', 'AjaxController@editNum')->name('edit-number');

Route::post('/pages', [App\Http\Controllers\PostsController::class, 'index'])->name('pages.index');

Route::post('/pages', [App\Http\Controllers\PostsController::class, 'store'])->name('pages.store');




