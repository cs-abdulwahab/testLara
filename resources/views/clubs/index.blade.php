@extends('layouts.app')
        @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h2>Clubs</h2>
                                <a href="/clubs/create" class="btn btn-primary">Create new club</a><br><br>
                                @if(count($clubs) > 0)
                                    <table class="table">
                                        <tr>
                <th>Id</th>
            
                <th>Name</th>
            
                <th>Created_at</th>
            
                <th>Updated_at</th>
            <th></th></tr>
                                        @foreach($clubs as $club)
                                            <tr>
                                                
                <td>{{ $club->id }}</td>
            
                <td>{{ $club->name }}</td>
            
                <td>{{ $club->created_at }}</td>
            
                <td>{{ $club->updated_at }}</td>
            
                                                <td><a href="/clubs/{{ $club->id }}/edit">edit</a> | <a href="javascript:if(confirm('Are you sure you want to delete this club?')){ document.location='/clubs/{{ $club->id }}/delete' }">delete</a></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                @else
                                    There are no clubs yet
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection