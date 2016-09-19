<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::resource('employee','EmployeeController');
Route::resource('department', 'DepartmentController');

Route::get('/', function () {
  //  $data = ['abc','pqr','xyz'];

    return 'this is the home page ';
});

/*$router->get('user','UserController@index');
$router->get('user/{id}','UserController@show');

$router->post('form',function (){
    return view ('UserController@store');
});

Route::resource('test', 'UserController');*/
/*Auth::routes();
Route::get('/home', 'HomeController@index');*/

