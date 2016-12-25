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

    {{ Form::model($dept) }}

    <div class="form-group">
        {!! Form::label('dname', 'DNAME :', ['class' => 'control-label']) !!}
        {!! Form::text('dname' ,null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dloc', 'DLOC:', ['class' => 'control-label']) !!}
        {!! Form::text('dloc',null,   ['class' => 'form-control']) !!}
    </div>
    {{ Form::close() }}


   {{-- {!! Form::open(['route' => ['department.update', $dept->id], 'method' => 'patch']) !!}
    <div class="form-group">
        {!! Form::label('dname', 'DNAME :', ['class' => 'control-label']) !!}
        {!! Form::text('dname', $dept->dname , ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dloc', 'DLOC:', ['class' => 'control-label']) !!}
        {!! Form::text('dloc', $dept->dloc , ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Update Department', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}--}}

    <a href="{{route('department.employee.index', compact('dept') ) }}" class="btn btn-primary">
        Employee Detail
    </a>


@stop