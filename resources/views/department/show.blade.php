this is the  show blade php   of department

@extends('layouts.app')

@section('content')

    @parent

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Panel heading</div>
        <div class="panel-body">
            <p>This is the Panel Body</p>
        </div>

        Department Name : {{$dept->dname}} <br/>
        Department Location : {{$dept->dloc}} <br/>
    </div>
@stop