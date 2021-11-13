<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('profiles.index');
// });

Auth::routes();

Route::get('/gram/create', 'App\Http\Controllers\PostsController@create');
Route::post('/gram', 'App\Http\Controllers\PostsController@store');
Route::get('/gram/{post}','App\Http\Controllers\PostsController@show');

Route::get('/', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', 'App\Http\Controllers\ProfilesController@edit')->name('profile.edit');
