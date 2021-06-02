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

use App\Http\Controllers\studentController;
use Illuminate\Auth\Events\Logout;

Route::get('/', function(){
    return redirect('login');
});

Route::get('login', 'AuthController@login');
Route::post('login', 'AuthController@authenticate');
Route::get('logout','AuthController@logout');


Route::resource('/students','StudentController');
Route::resource('/subjects','SubjectController');
Route::resource('/periods','PeriodController');

Route::post('/periods/{period}/attach-student','PeriodController@attachStudent');
Route::get('/periods/{period}/attach-student','PeriodController@attachStudentView');
Route::get('/periods/{period}/detach-student/{student_id}','PeriodController@detachStudent');

Route::post('/periods/{period}/attach-subject','PeriodController@attachSubject');
Route::get('/periods/{period}/attach-subject','PeriodController@attachSubjectView');
Route::get('/periods/{period}/detach-subject/{subject_id}','PeriodController@detachSubject');

Route::get('/periods/{id}/parcial_create', 'ParcialController@create');
Route::post('/periods/{id}/parcial_create', 'ParcialController@store');
Route::get('/periods/{id}/parcial_delete/{parcial_id}', 'ParcialController@destroy');

Route::get('/students/{student}/qualifications/{period_id}','StudentController@qualificationsView');
Route::get('/students/{student}/periods','StudentController@periodsApi');
Route::post('/students/{student}/qualifications/{period_id}','StudentController@qualificationsSave');