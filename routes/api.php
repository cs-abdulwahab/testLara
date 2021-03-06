<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');



Route::get('user/{id}', 'UserController@show');
Route::post('login', 'UserController@authenticate')->name('customlogin');

Route::post('/register', 'UserController@register');





//Route::get("/","FacultyController@index");

// Route::resource("/faculty","FacultyController");

/*

Route::resource("room","RoomController",[
                                        'only' => [  'store', 'show','update','destroy','index' ]
                                        /*,'names'=>['store'=>'save']*/
/*
                                    ]
);

Route::get("room/{strength}",'RoomController@roomStrength');*/

// Route::resource("/car","Car\CarController");
