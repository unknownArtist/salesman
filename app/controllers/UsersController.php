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
       

        return View::make('users.index', compact('User'));
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
		 $input = Input::all();
		
        $validation = Validator::make($input, Item::$rules);

        if ($validation->passes())
        {
            $this->users->create($input);

            return Redirect::route('users.index');
        }

        return Redirect::route('users.create')
            ->withInput()
            ->withErrors($validation)
            ->with('flash', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		 $users = $this->user->findOrFail($id);

        return View::make('users.show', compact('users'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		 $users = $this->user->find($id);

        if (is_null($users))
        {
            return Redirect::route('users.index');
        }

        return View::make('users.edit', compact('users'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
        $validation = Validator::make($input, Item::$rules);

        if ($validation->passes())
        {
            $users = $this->user->find($id);
            $users->update($input);

            return Redirect::route('users.show', $id);
        }

        return Redirect::route('users.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('flash', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->users->find($id)->delete();

        return Redirect::route('users.index');
	}

}