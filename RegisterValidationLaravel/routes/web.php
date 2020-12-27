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

use App\Employee;

Route::get('/registersql','EmployeeController@index');
Route::post('/registertable','EmployeeController@form');
Route::get('/registertable','EmployeeController@show');
Route::get('/registertable/{userid}','EmployeeController@delete');
Route::post('/edit/{userid}','EmployeeController@update');
Route::get('/edit/{userid}','EmployeeController@updateView');

Route::get('/registerarray','RegisterController@index');
Route::post('/registerarray','RegisterController@form');


Route::get('/find',function(){
  
    $post= Employee::where('userid',3)->orderBy('userid','desc')->take(5)->get();
    return $post;
    
});