<?php

            namespace App\Http\Controllers;

            use Illuminate\Http\Request;
            use App\Table1;

            class Table1sController extends Controller
            {

                // listing
                public function index(){
                    $table1s = Table1::all();
                    return view("table1s/index", compact("table1s"));
                }

                // show
                public function show(Table1 $table1){
                    return view("table1s/show", compact("user"));
                }

                // create
                public function create(){
                    return view("table1s/create");
                }

                // store
                public function store(){
                    $table1 = new Table1;
                    $table1->field1 = request('field1');
                    $table1->field2 = request('field2');
                    $table1->field3 = request('field3');
                    $table1->field4 = request('field4');
                    
                    $table1->save();
                    return redirect("/table1s");
                }

                // edit
                public function edit(Table1 $table1){
                    return view("table1s/edit", compact('table1'));
                }

                // update
                public function update(Table1 $table1){
                    $table1->field1 = request('field1');
                    $table1->field2 = request('field2');
                    $table1->field3 = request('field3');
                    $table1->field4 = request('field4');
                    
                    $table1->save();
                    return redirect("/table1s");
                }

                // delete
                public function delete(Table1 $table1){
                    $table1->delete();
                    return redirect("/table1s");
                }

            }
        