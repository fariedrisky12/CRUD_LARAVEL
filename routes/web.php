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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', 'WebController@home');
Route::get('/add', 'WebController@addForm');
Route::get('/edit/id={id}', 'WebController@editForm');
Route::get('/delete/id={id}', 'crudController@deleteData');

Route::post('/add/proses', 'crudController@insertData');
Route::post('/edit/id={id}', 'crudController@editData')->name('edit');
// Route::post('/delete/id={id}', 'crudController@deleteData');