this is the  show blade php   of department

@extends('layouts.app')

@section('content')

    @parent

    <div class="panel panel-default">
    	  <div class="panel-heading">
    			<h3 class="panel-title">Department Info </h3>
    	  </div>
    	  <div class="panel-body">
              Department Name : {{$dept->dname}} <br/>
              Department Location : {{$dept->dloc}} <br/>

          </div>
    </div>


    <table class="table table-hover">
        <thead>
        <tr>
            <th> Ename</th>
            <th> Username</th>
        </tr>
        </thead>
        <tbody>

        @foreach($emps as $emp)
            <tr>
                <td> {{  $emp->ename  }}  </td>
                <td> {{  $emp->ename  }}  </td>
            </tr>
        @endforeach

        </tbody>
    </table>



@stop