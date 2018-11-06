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
Route::get('/',function()
{
	return view('login2');
});
Route::post('/login', 'Login2@check');
Route::get('/home', 'Home@index');
Route::post('/home/insert','Home@insert_entry');
Route::post('/home/all','Home@all_entries');

Route::get('/logout','Login2@logout');

Route::post('/search/browse','Search@browse');
Route::post('/search/filter','Search@filter');
Route::get('/search','Search@index');

Route::get('/graph','GraphC@Index');
Route::post('/graph/data','GraphC@Graph_data');