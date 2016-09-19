@extends('layouts.app')

@section('content')

<a href="{{ route('department.create') }}" > Create a New Department </a>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Department name</th>
            <th>Department Location</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($depts as $dept)
            <tr>
                <td>{{ $dept->dname  }}</td>

                <td>{{ $dept->dloc  }}</td>
                <td><a href="{{route('department.show', $dept->id) }}"  class="btn btn-info">View </a></td>
                <td><a href="{{ route('department.edit', $dept->id) }}" class="btn btn-primary"> Edit </a></td>
                <td>
                        {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['department.destroy', $dept->id]
                            ]) !!}
                        {!! Form::submit('Delete this department?', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}

                    </td>
            </tr>

        @endforeach

        </tbody>
    </table>
@stop