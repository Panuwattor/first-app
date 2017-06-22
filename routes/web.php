<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', 'TestController@index');
Route::get('/test2', 'TestController@test2');
Route::get('/test3', 'TestController@test3');
