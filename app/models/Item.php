<?php

class Item extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
		'item_name' => 'required',
		// 'item_description' => 'required',
		'expired_at' => 'required',
		'quantity' => 'required'
	);
}