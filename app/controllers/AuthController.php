<?php

class AuthController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('auth.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
    try{

         $user = Sentry::register(array(
                'email'    => Input::get('email'),
                'password' => Input::get('password'),
            ));

           // Let's get the activation code
        $activationCode = $user->getActivationCode();
        echo "loggedin";
        
        // Mail::send('emails.welcome' function($message)
        // {
        //     $message->to('foo@example.com', 'John Smith')->subject('Welcome!');
        // });

    // Send activation code to the user so he can activate the account
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
    public function login()
    {   
        if ( ! Sentry::check())
        {
            
        }
        else
        {
            // User is logged in
        }
        return View::make('auth.login');
    }
    public function get_Login()
    {
        try
        {
            // Set login credentials
            $credentials = array(
                'email'    => Input::get('email'),
                'password' => Input::get('password'),
            );

            // Try to authenticate the user
            $user = Sentry::authenticate($credentials, false);
            echo "hello world happy code";
        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            echo 'Login field is required.';
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            echo 'Password field is required.';
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            echo 'User was not found.';
        }
        catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
        {
            echo 'Wrong password, try again.';
        }
        catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
        {
            echo 'User is not activated.';
        }
    }


}