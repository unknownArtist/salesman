@extends('layouts.scaffold')

@section('main')
	<ul>
		{{ Form::open(array('route' => 'log.in')) }}
			<li>
				{{ Form::label('email','Email')}}
				{{ Form::text('email')}}
			</li>
			
			<li>
				{{ Form::label('password','Password')}}
				{{ Form::password('password')}}
			</li>
			<li>
				{{ Form::submit('Login',array('class' => 'btn btn-success'))}}
			</li>	
			
			<li>
				{{ Form::close()}}
			</li>			
			
		</ul>

@endsection