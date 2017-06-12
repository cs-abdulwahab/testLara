@extends('layouts.app')
        @section('content')
            
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h2>Edit club</h2>
                                    <form action="/clubs/{{ $club->id }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $club->name }}"></div>
                
                                        <div class="form-group">
                                            <a href="/clubs" class="btn btn-default">cancel</a>
                                            <input type="submit" value="Save club" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endsection