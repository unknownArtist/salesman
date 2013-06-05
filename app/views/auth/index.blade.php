@extends('layouts.scaffold')

@section('main')
		<ul>
			{{ Form::open(array('route' => 'register.store')) }}
			<li>
				{{ Form::label('email','Email')}}
				{{ Form::text('email')}}
			</li>
			<li>
				{{ Form::label('password','Password')}}
				{{ Form::password('password')}}

			</li>
			<li>
				{{ Form::label('confirm-password','Please Confirm Password')}}
				{{ Form::password('confirm-password')}}
			</li>
			<li>
				{{ Form::submit('Register')}}
			</li>	
			<li>
				{{ Form::close()}}
		</li>			
			
		</ul>

@endsection