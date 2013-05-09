<h1>All users</h1>

<p>{{ link_to_route('users.create', 'Add new users',$array=NULL, array('class' => 'btn btn-info')) }}</p>
<p>{{ link_to_route('login', 'login',$array=NULL, array('class' => 'btn btn-info')) }}</p>
@if ($users->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>User Name</th>
			
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->email }}</td>
					
                    <td>
                        {{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')) }}
                    </td>
                  
                    <td>                   
            
                  {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $us->id)))}}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>


                </tr>


               @endforeach                
        </tbody>
    </table>
@else
    There are no users
@endif

@stop