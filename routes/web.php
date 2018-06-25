<?php

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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/threads/{thread}', 'ThreadController@show')->name('threads.detail');
Route::post('/threads', 'ThreadController@store');
Route::post('/threads/{thread}/reply', 'ReplyController@store');
Route::post('/threads/{thread}/best-reply', 'MarkBestReplyController@store');

Route::post('/replies/{reply}/favorite', 'FavoriteController@store');
Route::post('/replies/{reply}/unfavorite', 'FavoriteController@destroy');

Route::get('/skills/{skill}', 'SkillController@show')->name('skills.detail');

Route::get('/series/{serie}', 'SerieController@show')->name('series.detail');

Route::get('/users/{user}', 'UserController@show')->name('users.profile');

Route::get('/search', 'SearchController@index');

Auth::routes();
