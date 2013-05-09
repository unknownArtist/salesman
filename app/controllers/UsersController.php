<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 protected $user;
     
     public function __construct(user $user)
    {
        $this->user = $user;
    }

	public function index()
	{
		 $users = $this->user->all();
       

        return View::make('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}
 
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		try
{
		 // Create the user
    $Users = Sentry::getUserProvider()->create(array(
        'email'    => Input::get('email'),
        'password' => Input::get('password')

    ));

    
  
}
catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
{
    echo 'Login field is required.';
}
catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
{
    echo 'Password field is required.';
}
catch (Cartalyst\Sentry\Users\UserExistsException $e)
{
    echo 'User with this login already exists.';
}


	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		 
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	 $user = $this->user->find($id);

        if (is_null($user))
        {
            return Redirect::route('users.index');
        }

        return View::make('users.edit', compact('user'));	
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		try
{
    // Find the user using the user id
    $user = Sentry::getUserProvider()->findById($id);

    // Update the user details
    $user->email = Input::get('email');
    $user->first_name =Input::get('first_name');
    $user->last_name = Input::get('last_name');

    // Update the user
    if ($user->save())
    {
        // User information was updated
    }
    else
    {
        // User information was not updated
    }
}
catch (Cartalyst\Sentry\Users\UserExistsException $e)
{
    echo 'User with this login already exists.';
}
catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
{
    echo 'User was not found.';
		
	}

}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try
{
    // Find the user using the user id
    $user = Sentry::getUserProvider()->findById($id);

    // Delete the user
    $user->delete();
}
catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
{
    echo 'User was not found.';
}

	}
	
public function getLogin()
	{
		// Show the register form
		return View::make('users.login');
	}
}