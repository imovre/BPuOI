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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/documents', 'DocumentController@index')->name('documents');
Route::post('/documents', 'DocumentController@store')->name('documents.store');

Route::get('/diagonals', 'DiagonalController@index');
Route::get('/resolutions', 'ResolutionController@index');
Route::get('/printer_types', 'PrinterTypeController@index');
Route::get('/cpus', 'CpuController@index');
Route::get('/hdds', 'HddController@index');
Route::get('/departments', 'DepartmentController@index');
Route::get('/rooms', 'RoomController@index');
Route::get('/worksites', 'WorksiteController@index');
Route::get('/monitors', 'MonitorController@index');
Route::get('/printers', 'PrinterController@index');
Route::get('/computers', 'ComputerController@index');

Route::get('/diagonals/new', 'DiagonalController@create');
Route::post('/diagonals', 'DiagonalController@store');
Route::get('/resolutions/new', 'ResolutionController@create');
Route::post('/resolutions', 'ResolutionController@store');
Route::get('/printer_types/new', 'PrinterTypeController@create');
Route::post('/printer_types', 'PrinterTypeController@store');
Route::get('/cpus/new', 'CpuController@create');
Route::post('/cpus', 'CpuController@store');
Route::get('/hdds/new', 'HddController@create');
Route::post('/hdds', 'HddController@store');
Route::get('/departments/new', 'DepartmentController@create');
Route::post('/departments', 'DepartmentController@store');
Route::get('/rooms/new', 'RoomController@create');
Route::post('/rooms', 'RoomController@store');
Route::get('/worksites/new', 'WorksiteController@create');
Route::post('/worksites', 'WorksiteController@store');
Route::get('/monitors/new', 'MonitorController@create');
Route::post('/monitors', 'MonitorController@store');
Route::get('/printers/new', 'PrinterController@create');
Route::post('/printers', 'PrinterController@store');
Route::get('/computers/new', 'ComputerController@create');
Route::post('/computers', 'ComputerController@store');
