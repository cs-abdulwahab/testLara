
@extends ('app')

{!! Form::open(['url' => 'foo/bar']) !!}

<div class="form-group">
    <label for=""></label>
    <input type="text" class="form-control" name="" id="" placeholder="Input...">

    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}

    {!! Form::text('name', null   , ['class' => 'form-control']) !!}


    Form


</div>

<div class="form-group">

    {!! Form::submit('Add Entity', ['class' => 'btn btn-primary form-control']) !!}
    
</div>


{!! Form::close() !!}


