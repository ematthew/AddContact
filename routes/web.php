<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','ContactsController@index');

Auth::routes();

Route::get('/contact', 		 		'ContactsController@create'); //show contact view
Route::post('/contact',				'ContactsController@store'); //add contact to db
Route::get('/edit/contact/{id}', 	'ContactsController@edit');   //show edit view
Route::get('/delete/contact/{id}', 	'ContactsController@delete'); //delete contact from db
Route::post('/contact/{id}', 		'ContactsController@update'); //update contact on db

