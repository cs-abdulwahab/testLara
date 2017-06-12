@extends('layouts.app')
        @section('content')
            
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h2>Edit skilldomain</h2>
                                    <form action="/skilldomains/{{ $skilldomain->id }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $skilldomain->name }}"></div>
                
                                        <div class="form-group">
                                            <a href="/skilldomains" class="btn btn-default">cancel</a>
                                            <input type="submit" value="Save skilldomain" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endsection