<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users', $users));
    }


    public function show($id)
    {
        $user = User::all0()->find($id);
        $users = User::all();

        //  dd($users);

        return view('user.index', compact('users', $users));

    }


    public function store()
    {

        return 'store method';

    }


}


