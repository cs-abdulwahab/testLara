

{{  Form::model('Employee',['route'=>'employee.store' , 'files'=>'true'  ]) }}

{!! Form::text('ename', 'Ename', ['class' => 'form-control']) !!}
{!! Form::text('username', 'Username', ['class' => 'form-control']) !!}

{{ Form::label('size','Size')  }}

{{ Form::select('department_id', $depts   ) }}

{{ Form::file('imgfile')  }}

{{ Form::submit('submit')  }}
{{ Form::close() }}