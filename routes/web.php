<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Веб-маршруты
|--------------------------------------------------------------------------
|
| Эти маршруты загружаются RouteServiceProvider в группе, 
| которая содержит группу промежуточного программного обеспечения "web". 
|
*/

Route::get('/', function () {return view('welcome');});

//---------------- Machines ----------------------------------
Route::get('/machines', 'MachineController@index')              -> name('machine.index');
Route::get('/machines/create', 'MachineController@create')      -> name('machine.create');
Route::post('/machines', 'MachineController@store')             -> name('machine.store');
Route::get('/machines/{machine}', 'MachineController@show')     -> name('machine.show');
Route::get('/machines/{machine}/edit', 'MachineController@edit')-> name('machine.edit');
Route::patch('/machines/{machine}', 'MachineController@update') -> name('machine.update');
Route::delete('/machines/{machine}', 'MachineController@destroy')-> name('machine.delete');
Route::get('/machines/update', 'MachineController@update');
Route::get('/machines/delete', 'MachineController@delete');
Route::get('/machines/first_or_create', 'MachineController@firstOrCreate');
Route::get('/machines/update_or_create', 'MachineController@updateOrCreate');

Route::get('/main', 'MainController@index')->name('main.index');

Route::get('/offers', 'OfferController@index')->name('offer.index');