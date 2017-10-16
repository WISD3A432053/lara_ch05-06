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

Route::get('student/{student_no/score/(subject?)}', function ($student_no,$subhect = null) {
    return "學號：".$student_no."的".((is_null($subhect))?"所有科目":$subhect)."成績";
});