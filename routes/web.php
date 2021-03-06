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

Route::get('/', 'WelcomeController@show');
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{slug}', 'BlogController@show');
Route::get('/resume/print', 'ResumeController@print');
Route::get('/resume/download', 'ResumeController@download');
