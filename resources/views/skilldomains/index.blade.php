@extends('layouts.app')
        @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h2>Skilldomains</h2>
                                <a href="/skilldomains/create" class="btn btn-primary">Create new skilldomain</a><br><br>
                                @if(count($skilldomains) > 0)
                                    <table class="table">
                                        <tr>
                <th>Id</th>
            
                <th>Name</th>
            
                <th>Created_at</th>
            
                <th>Updated_at</th>
            <th></th></tr>
                                        @foreach($skilldomains as $skilldomain)
                                            <tr>
                                                
                <td>{{ $skilldomain->id }}</td>
            
                <td>{{ $skilldomain->name }}</td>
            
                <td>{{ $skilldomain->created_at }}</td>
            
                <td>{{ $skilldomain->updated_at }}</td>
            
                                                <td><a href="/skilldomains/{{ $skilldomain->id }}/edit">edit</a> | <a href="javascript:if(confirm('Are you sure you want to delete this skilldomain?')){ document.location='/skilldomains/{{ $skilldomain->id }}/delete' }">delete</a></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                @else
                                    There are no skilldomains yet
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection