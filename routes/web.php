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
    return view('welcome',[
        'info' =>"gggggggggggg",
    ]);
});

//Route::view('/','welcome');
Route::view('contact','contact');
Route::view('about','about');
Route::get('customers','customerController@list');
Route::view('student/Registration','student');
Route::post('saveStudent','studentController@store');