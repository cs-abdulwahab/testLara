<?php

            namespace App\Http\Controllers;

            use Illuminate\Http\Request;
            use App\Skilldomain;

            class SkilldomainsController extends Controller
            {

                // listing
                public function index(){
                    $skilldomains = Skilldomain::all();
                    return view("skilldomains/index", compact("skilldomains"));
                }

                // show
                public function show(Skilldomain $skilldomain){
                    return view("skilldomains/show", compact("user"));
                }

                // create
                public function create(){
                    return view("skilldomains/create");
                }

                // store
                public function store(){
                    $skilldomain = new Skilldomain;
                    $skilldomain->name = request('name');
                    
                    $skilldomain->save();
                    return redirect("/skilldomains");
                }

                // edit
                public function edit(Skilldomain $skilldomain){
                    return view("skilldomains/edit", compact('skilldomain'));
                }

                // update
                public function update(Skilldomain $skilldomain){
                    $skilldomain->name = request('name');
                    
                    $skilldomain->save();
                    return redirect("/skilldomains");
                }

                // delete
                public function delete(Skilldomain $skilldomain){
                    $skilldomain->delete();
                    return redirect("/skilldomains");
                }

            }
        