<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\DepartmentRequest;
use App\Vehicle;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $depts = Department::all();

        return view('department.index',['depts' => $depts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.create');;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentRequest $request)
    {

       /* $this->validate($request, [
            'dname' => 'required|max:255',
            'dloc' => 'bail|required'
        ]);*/

        $dept = new Department();

        $dept->dname = $request->input('dname');
        $dept->dloc = $request->input('dloc');
        $dept->save();
        // redirect
        return Redirect::to('department'); ;

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $dept = Department::find($id);

        return View::make('department.show', compact('dept'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dept = Department::find($id);
        return view('department.edit',['dept' => $dept]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'dname' => 'required|max:255',
            'dloc' => 'bail|required'
        ]);

        $dept = Department::find($id);

        $dept->dname = $request->input('dname');
        $dept->dloc = $request->input('dloc');
        $dept->save();
        // redirect
        return Redirect::to('department'); ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {




        $dept = Department::find($id);

        $dept->delete();

       return Redirect::route('department.index');


    }
}
