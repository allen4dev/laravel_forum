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

// Route::get('/users/{user}', function () {
//     return view('users.profile');
// })->name('users.profile');

Route::get('/skills/{skill}', 'SkillController@show')->name('skills.detail');

// Route::get('/search', function () {
//     return view('search');
// });

// Route::get('/series/{serie}', function () {
//     return view('series.detail');
// });

Auth::routes();
