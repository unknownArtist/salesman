<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
<<<<<<< HEAD
=======
     protected $guarded = array();
     public static $rules = array(
		'email' => 'required',
		// 'item_description' => 'required',
		'password' => 'required'
		
	);

>>>>>>> 4a317c81d5cc2dd794650ce7cac4ad5e231bd6fe

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
<<<<<<< HEAD
	protected $table = 'users';
=======
	// public static $unguarded = true;
	protected $table = 'users';
	public $timestamps = false;
>>>>>>> 4a317c81d5cc2dd794650ce7cac4ad5e231bd6fe

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}