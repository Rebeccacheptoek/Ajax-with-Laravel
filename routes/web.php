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
$student_controller = \App\Http\Controllers\StudentController::class;
Route::get('/', function () {
    return view('welcome');
});

Route::get('students',$student_controller.'@index');
Route::get('/fetch_students',$student_controller.'@fetchstudent');
Route::post('students',$student_controller.'@store');
Route::get('/edit-student/{stud_id}',$student_controller.'@edit');
Route::put('/update-student/{stud_id}',$student_controller.'@update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
