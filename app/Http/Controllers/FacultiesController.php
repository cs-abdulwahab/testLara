<?php

            namespace App\Http\Controllers;

            use Illuminate\Http\Request;
            use App\Faculty;

            class FacultiesController extends Controller
            {

                // listing
                public function index(){
                    $faculties = Faculty::all();
                    return view("faculties/index", compact("faculties"));
                }

                // show
                public function show(Faculty $faculty){
                    return view("faculties/show", compact("user"));
                }

                // create
                public function create(){
                    return view("faculties/create");
                }

                // store
                public function store(){
                    $faculty = new Faculty;
                    $faculty->name = request('name');
                    $faculty->email = request('email');
                    
                    $faculty->save();
                    return redirect("/faculties");
                }

                // edit
                public function edit(Faculty $faculty){
                    return view("faculties/edit", compact('faculty'));
                }

                // update
                public function update(Faculty $faculty){
                    $faculty->name = request('name');
                    $faculty->email = request('email');
                    
                    $faculty->save();
                    return redirect("/faculties");
                }

                // delete
                public function delete(Faculty $faculty){
                    $faculty->delete();
                    return redirect("/faculties");
                }

            }
        