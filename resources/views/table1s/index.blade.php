@extends('layouts.app')
        @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h2>Table1s</h2>
                                <a href="/table1s/create" class="btn btn-primary">Create new table1</a><br><br>
                                @if(count($table1s) > 0)
                                    <table class="table">
                                        <tr>
                <th>Id</th>
            
                <th>Field1</th>
            
                <th>Field2</th>
            
                <th>Field3</th>
            
                <th>Field4</th>
            
                <th>Created_at</th>
            
                <th>Updated_at</th>
            <th></th></tr>
                                        @foreach($table1s as $table1)
                                            <tr>
                                                
                <td>{{ $table1->id }}</td>
            
                <td>{{ $table1->field1 }}</td>
            
                <td>{{ $table1->field2 }}</td>
            
                <td>{{ $table1->field3 }}</td>
            
                <td>{{ $table1->field4 }}</td>
            
                <td>{{ $table1->created_at }}</td>
            
                <td>{{ $table1->updated_at }}</td>
            
                                                <td><a href="/table1s/{{ $table1->id }}/edit">edit</a> | <a href="javascript:if(confirm('Are you sure you want to delete this table1?')){ document.location='/table1s/{{ $table1->id }}/delete' }">delete</a></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                @else
                                    There are no table1s yet
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection