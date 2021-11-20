<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [App\Http\Controllers\ProfilesController::class, 'pass'])->name('profile.show');
// Routes for the gram blade
Route::post('/gram', 'App\Http\Controllers\PostsController@store');
Route::get('/gram/create', 'App\Http\Controllers\PostsController@create');
Route::get('/gram/{post}','App\Http\Controllers\PostsController@show');



// Routes for the profile blade
Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', 'App\Http\Controllers\ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');
