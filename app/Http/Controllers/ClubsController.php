<?php

            namespace App\Http\Controllers;

            use Illuminate\Http\Request;
            use App\Club;

            class ClubsController extends Controller
            {

                // listing
                public function index(){
                    $clubs = Club::all();
                    return view("clubs/index", compact("clubs"));
                }

                // show
                public function show(Club $club){
                    return view("clubs/show", compact("user"));
                }

                // create
                public function create(){
                    return view("clubs/create");
                }

                // store
                public function store(){
                    $club = new Club;
                    $club->name = request('name');
                    
                    $club->save();
                    return redirect("/clubs");
                }

                // edit
                public function edit(Club $club){
                    return view("clubs/edit", compact('club'));
                }

                // update
                public function update(Club $club){
                    $club->name = request('name');
                    
                    $club->save();
                    return redirect("/clubs");
                }

                // delete
                public function delete(Club $club){
                    $club->delete();
                    return redirect("/clubs");
                }

            }
        