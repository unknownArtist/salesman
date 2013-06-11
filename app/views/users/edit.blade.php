
<h1>Edit Users</h1>
{{ Form::model($user, array('method' => 'PATCH', 'route' => array('users.update', $user->id))) }}
    <ul>
        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>
          <li>
            {{ Form::label('first_name', 'first nmae:') }}
            {{ Form::text('first_name') }}
        </li>

        <li>
            {{ Form::label('last_name', 'last name:') }}
            {{ Form::text('last_name') }}
        </li>

        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('users.show', 'Cancel', $user->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}