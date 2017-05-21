<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class UploadController extends Controller
{
    public function upload(Request $request){


        if (Input::hasFile('imgfile')){

            echo 'has file ';

            echo request()->file('imgfile')->getClientOriginalName();
            echo $request->file('imgfile')->

            request()->file('imgfile')->store('avatars');


//            $file->move('uploads',$file->getClientOriginalName());

  //          echo $file->getClientOriginalName();
        }
        else{
            echo 'not file ';
        }
        
     //   echo 'upload function from UploadController ';
    }
}
