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




/*Route::get('/user',function(){
    return 'this is the message';
});*/




// Route::resource("/faculty","FacultyController");


// Route::resource("/car","Car\CarController");

//Route::resource('department', 'Department\DepartmentController');
// Route::resource('department.employee', 'Employee\DepartmentEmployeeController');

//Route::resource('department', '');

/*Route::get('/', function () {
    //  $data = ['abc','pqr','xyz'];
    return 'this is the home page ';
});*/
/*
 *
 *
 *  Route::get('/age', function () {
    //  $data = ['abc','pqr','xyz'];
    return 'this is the age page ';
});

*/
// Route::resource("/room","RoomController");
/*
Route::get('/dep{Department}', function (\App\Department $department) {
    return $department->dname;
});

    Route::get('/allEmployeesByName/{name}', function ($name) {
    $res = Employee::where('ename', 'LIKE', '%' . $name . '%')->get();
    return $res;
});

Route::get('depts', function () {
    return Department::paginate();
});
*/


//Route::get('/notify',   );

/*$router->get('user','UserController@index');
$router->get('user/{id}','UserController@show');

$router->post('form',function (){
    return view ('UserController@store');
});

Route::resource('test', 'UserController');*/
/*Auth::routes();
Route::get('/home', 'HomeController@index');*/


Auth::routes();

Route::get('/home', 'HomeController@index');

// Route::resource('employee','Employee\EmployeeController');

Route::get('/', function (){

    return View::make('welcome');

});




Route::post('upload','UploadController@upload');
