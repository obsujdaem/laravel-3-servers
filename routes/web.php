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

use Illuminate\Support\Facades\Route;

Route::get('/', 'RegistrationController@index')->name('main');
Route::post('/', 'RegistrationController@store')->name('registration');

Route::get('/add/post', 'AddPostController@index')->name('postIndex');
Route::post('/add/post', 'AddPostController@store')->name('postSave')->middleware('addPost');
