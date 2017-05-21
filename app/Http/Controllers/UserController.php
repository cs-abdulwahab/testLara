<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use AuthenticatesUsers;


    public function index()
    {


        $users = User::all();
        return view('user.index', compact('users', $users));
    }


    public function show($id)
    {
        /* $user = User::all()->find($id);
         $users = User::all();*/

        //  dd($users);

        $user = User::findOrFail($id);

        return $user;

        //   return view('user.index', compact('users', $users));

    }


    public function store()
    {

        return 'store method';

    }

    function username()
    {
        return 'username';
    }


    public function authenticate(Request $request)
    {
        // grab credentials from the request
        $credentials = $request->only('username', 'password');


        $cred = ['username' => 'admin', 'password' => 'password'];

        $username = $cred['username'];
        $password = $cred['password'];

        /*        $this->validate($request, [
                    $this->username() => 'required', 'password' => 'required',
                ]);*/


//        if (Auth::attempt($username, $password)) {
        if (Auth::attempt(['name' => 'user', 'password' => 'pass'])) {

            // $request->session()->set('asd', 'asdvalue');



            echo 'validate \n hai ';
        } else {
            echo 'validate nahi hoip';
        }


        echo 'user controller authenticate function ', PHP_EOL;
        // return redirect()->action('UserController@session');

//        dd($credentials);

    }

    public function session(Request $request)
    {


        echo $request->session()->get('asd', 'def') . '</br>';

        echo 'session method';

        return redirect()->action('UserController@tession');


    }


    public function register(Request $request)
    {

        $credentials = $request->only('username', 'api_token', 'password', 'email');

        // dd( $credentials );

        //  echo 'user controller authenticate function ';

        $user = new User([
            'name' => $credentials['username'],
            'api_token' => str_random(60),
            'email' => str_random(60) . '@dummy.com',
            'password' => bcrypt($credentials['password']),

        ]);

        $role = Role::find(2);

        // echo $role;

        $user->role()->associate($role);

        echo $user;

        $user->saveOrFail();


    }


}


