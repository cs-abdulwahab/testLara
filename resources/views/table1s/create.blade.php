@extends('layouts.app')
        @section('content')
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h2>Create table1</h2>
                                    <form action="/table1s" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                    <label for="name" class="control-label">Field1</label>
                    <input type="text" name="field1" class="form-control"></div>
                
                                        <div class="form-group">
                                            <a href="/table1s" class="btn btn-default">cancel</a>
                                            <input type="submit" value="Create new table1" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endsection