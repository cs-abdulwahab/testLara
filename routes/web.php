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


Route::resource("/faculty", "FacultyController", ['except' => ['create', 'edit', 'update']]);


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

/*
Auth::routes();

Route::get('/home', 'HomeController@index');*/

// Route::resource('employee','Employee\EmployeeController');

use App\Events\DummyEvent;
use App\Jobs\sendPushMessages;
use App\Jobs\sendWelcomeMail;
use Illuminate\Support\Facades\Input;


Route::get('/', function () {

    return View::make('welcome');

});


// Route::post('/finger', 'FingerController@store');


//
//Route::get('/sendmail', function () {
//
//    echo 'asd';
//    Log::info("Request cycle without Queues started");
//     Mail::send('email.welcome', ['data'=>'data'], function ($message) {
//
//         $message->from('bill@gates.com', 'Bill Gates');
//
//         $message->to('cs.abdulwahab@gmail.com');
//
//     });
//     Log::info("Request cycle without Queues finished");
//
//    Log::info("Request Cycle with Queues Begins");
//    dispatch(new sendWelcomeMail());
//    Log::info("Request Cycle with Queues Ends");
//
//
//});


//
/*
Route::get('/bridge', function () {
    $pusher = App::make('pusher');

//    $pusher->trigger( 'test-channel',
//        'test-event',
//        array('text' => 'Preparing the Pusher Laracon.eu workshop!'));

      for($i=0 ;$i< 5 ; $i++)
      {
           $pusher->trigger( 'test-channel',            'test-event',            array('text' => 'i = '.$i ));
         // echo 'i = '.$i.'<br/>';
      }

    // event(new DummyEvent());
    dispatch(new sendPushMessages());
    echo 'dispatched messages ';

    return view('welcome');
});

Route::resource('softwarehouse', 'SoftwareHouseController');

Route::get('softwarehouse', 'SoftwareHouseController@index')->middleware('auth');*/


// Route::post('upload','UploadController@upload');


/*Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});*/

Auth::routes();

// Authentication Routes...
//Route::get('login', 'Auth\LoginController@showLoginForm')->name('customlogin');

Route::post('login', 'UserController@authenticate')->name('customlogin');

Route::post('/register', 'UserController@register');

Route::get('session', 'UserController@session');
Route::get('tession', 'UserController@tession');

//Route::get('/home', 'HomeController@index');

//Auth::routes();
//
//Route::get('/home', 'HomeController@index');
