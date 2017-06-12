@extends('layouts.app')
        @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h2>Faculties</h2>
                                <a href="/faculties/create" class="btn btn-primary">Create new faculty</a><br><br>
                                @if(count($faculties) > 0)
                                    <table class="table">
                                        <tr>
                <th>Id</th>
            
                <th>Name</th>
            
                <th>Email</th>
            
                <th>Created_at</th>
            
                <th>Updated_at</th>
            <th></th></tr>
                                        @foreach($faculties as $faculty)
                                            <tr>
                                                
                <td>{{ $faculty->id }}</td>
            
                <td>{{ $faculty->name }}</td>
            
                <td>{{ $faculty->email }}</td>
            
                <td>{{ $faculty->created_at }}</td>
            
                <td>{{ $faculty->updated_at }}</td>
            
                                                <td><a href="/faculties/{{ $faculty->id }}/edit">edit</a> | <a href="javascript:if(confirm('Are you sure you want to delete this faculty?')){ document.location='/faculties/{{ $faculty->id }}/delete' }">delete</a></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                @else
                                    There are no faculties yet
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection