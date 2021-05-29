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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/students','StudentController');
Route::resource('/subjects','SubjectController');
Route::resource('/periods','PeriodController');

Route::post('/periods/{period}/attach-student','PeriodController@attachStudent');
Route::get('/periods/{period}/attach-student','PeriodController@attachStudentView');
Route::get('/periods/{period}/detach-student/{student_id}','PeriodController@detachStudent');
