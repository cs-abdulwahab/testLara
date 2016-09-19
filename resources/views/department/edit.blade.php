@extends('layouts.app')
this is the Edit blade

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{--{{ dd($dept)  }}--}}


    {!! Form::open(['route' => ['department.update', $dept->id], 'method' => 'patch']) !!}


    <div class="form-group">
        {!! Form::label('dname', 'DNAME :', ['class' => 'control-label']) !!}
        {!! Form::text('dname',$dept->dname , ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dloc', 'DLOC:', ['class' => 'control-label']) !!}
        {!! Form::text('dloc', $dept->dloc , ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Update Department', ['class' => 'btn btn-primary']) !!}


    <a href= href="{{route('department.employee.show', $dept->id) }}" class="btn btn-primary">
        Employee Detail
    </a>

    {!! Form::close() !!}

@stop