@extends('layouts.app')

@section('content')



    @if (  !$emps->isEmpty() )

        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th> Employee Name</th>
                <th> Username</th>
                <th> Profile pic</th>
            </tr>
            </thead>
            <tbody>


            @foreach($emps as $emp)
                <tr>
                    <td> {{  $emp->ename  }}  </td>
                    <td> {{  $emp->username  }}  </td>
                    <td> {{
                     $path = storage_path() . '/profilepic/' . $emp->profilepic

               }}

                        {{ HTML::image('profilepic/'.$emp->profilepic, 'a picture')


                        }}

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>



    @endif


@stop