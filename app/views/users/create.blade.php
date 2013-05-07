<h1>Add Users</h1>

{{ Form::open(array('route' => 'users.store')) }}
    <ul>
        <li>
            {{ Form::label('user_email', 'Email:') }}
            {{ Form::text('user_email') }}
        </li>

        <li>
            {{ Form::label('user_password', 'Password:') }}
            {{ Form::Password('item_password') }}
        </li>
        <li>
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}
