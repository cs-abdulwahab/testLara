@extends('layouts.app')
        @section('content')
            
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h2>Edit table1</h2>
                                    <form action="/table1s/{{ $table1->id }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                    <label for="name" class="control-label">Field1</label>
                    <input type="text" name="field1" class="form-control" value="{{ $table1->field1 }}"></div>
                
                                        <div class="form-group">
                                            <a href="/table1s" class="btn btn-default">cancel</a>
                                            <input type="submit" value="Save table1" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endsection