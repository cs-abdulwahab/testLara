@extends('layouts.app')
        @section('content')
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h2>Create faculty</h2>
                                    <form action="/faculties" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <textarea name="name" class="form-control"></textarea></div>
                <div class="form-group">
                    <label for="name" class="control-label">Email</label>
                    <textarea name="email" class="form-control"></textarea></div>
                
                                        <div class="form-group">
                                            <a href="/faculties" class="btn btn-default">cancel</a>
                                            <input type="submit" value="Create new faculty" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endsection