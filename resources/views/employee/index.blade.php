@extends('layouts.app')

@section('content')



    @if ( ! $emps->isEmpty() )
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th> Employee Name</th>
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



    @endif


@stop