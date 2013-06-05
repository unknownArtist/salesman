<?php

class Item extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
		'item_company' => 'required',
		'item_desc' => 'required',
		'item_price' => 'required',
		'item_expiry' => 'required'
	);
}