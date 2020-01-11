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

Route::get('/', 'GameMachineController@index');
Route::get('/add-game-machine', 'GameMachineController@create');
Route::post('/store-game-machine', 'GameMachineController@store')->name('store-game-machine');
Route::get('/delete-game-machine/{id}', 'GameMachineController@delete');

//Route::resource('game-machines', 'GameMachineController');
