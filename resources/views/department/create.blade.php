this is the create blade
@extends('layouts.app')

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


    {!! Form::open(['route' => 'department.store', 'method' => 'post']) !!}

    <div class="form-group">
        {!! Form::label('dname', 'Title:', ['class' => 'control-label']) !!}
        {!! Form::text('dname', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dloc', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('dloc', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Create New Department', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@stop