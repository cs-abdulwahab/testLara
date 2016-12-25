@extends('layouts.app')

@section('content')

<a href="{{ route('department.create') }}"  class="btn btn-success" > Create a New Department </a>

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
                <td><a href="{{route('department.employee.index', $dept->id) }}"  class="btn btn-success">View Employees </a></td>
                <td><a href="{{route('department.show', $dept->id) }}"  class="btn btn-info">View Dept</a></td>
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
        {{ $depts->links() }}
        </tbody>
    </table>
@stop