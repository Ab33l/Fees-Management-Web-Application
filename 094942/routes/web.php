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
use App\Student;
use App\Fee;

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'StudentsController@home');
Route::get('/student', 'StudentsController@student');
Route::get('/fees', 'FeesController@fees');
Route::post('/studentstore', 'StudentsController@store');
Route::post('/feestore', 'FeesController@store');
Route::get('/stdrecords', 'StudentsController@index' );
Route::get('/feerecords', 'FeesController@index' );
Route::get('/stdedit/{id}', 'StudentsController@edit');
Route::get('/stdview/{id}', 'StudentsController@show');
Route::get('/feeview/{id}', 'FeesController@show');
Route::get('/stdremove/{id}', 'StudentsController@destroy');
Route::get('/student', 'StudentsController@create');
Route::get('/fees', 'FeesController@create');
Route::post('/search', 'FeesController@search');
Route::get('/stdrecords/{id}/fees', 'FeesController@getStdfees');
