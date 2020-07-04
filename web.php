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
    return view('home');
});

Route::get('/register', function () {
    return view('Form');
});

Route::get('/wellcome', function () {
    return view('welcome1');
});

Route::get('/data-tables', function () {
    return view('admin.data1');
});

Route::get('/pertanyaan', 'PertanyaanController@index', function(){
    return view('pertanyaan');
});

Route::get('/pertanyaan/create', 'PertanyaanController@create', function(){
    return view('pertanyaan');
});

Route::post('/pertanyaan', 'PertanyaanController@store', function(){
    return view('pertanyaanPost');
});

Route::get('/jawaban{pertanyaan_id}', 'JawabanController@index', function(){
    return view('jawaban');
});

Route::post('/jawaban{pertanyaan_id}', 'JawabanController@store', function(){
    return view('jawabanPost');
});