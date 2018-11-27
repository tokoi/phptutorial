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

use App\User;

use Illuminate\Http\Request;

Route::get('/users', 'UserController@index');
Route::get('/', 'StaticPagesController@home');
// Route::get('/home', 'StaticPagesController@home');
Route::get('/help', 'StaticPagesController@help');
Route::get('/about', 'StaticPagesController@about');

Route::get('/login', 'SessionsController@new');
Route::post('/login', 'SessionsController@create');
Route::delete('/logout', 'SessionsController@destroy');
