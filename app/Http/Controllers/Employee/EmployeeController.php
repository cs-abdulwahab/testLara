<?php

namespace App\Http\Controllers\Employee;

use App\Department;
use App\Employee;
use Collective\Html\HtmlFacade;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;

class EmployeeController extends Controller
{
    public function getAllEmployees()
    {


    }
public function index(){

    return View::make('employee.index', array('emps'=> Employee::all()  ));

}

    public function create()
    {

        $depts = Department::all()->pluck('dname', 'id');

        //  dump($depts);

        return View::make('employee.create', compact('depts', $depts));
    }

    /**
     * @param Request $request
     */
    public function store(Request $request)
    {

        $emp = new Employee();
     //   dump($emp);
       dump($request);


        $emp->ename = $request->ename;
        $emp->username = $request->username;
        $emp->profilepic = request()->file('imgfile')->hashName();
        $emp->department_id = $request->department_id;

        $emp->save();


        request()->file('imgfile')->store('profilepic');


    }

}
