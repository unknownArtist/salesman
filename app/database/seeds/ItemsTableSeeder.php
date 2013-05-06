<?php

class ItemsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('items')->delete();

        $items = array(
        	'item_name'	=>	'something',
        	'item_description' => "ding dong",
        	'expired_at'	=>	'2014-4-3',
        	'quantity'		=> 3,
        	'item_name'	=>	'something',
        	'item_description' => "ding dong",
        	'expired_at'	=>	'2014-4-3',
        	'quantity'		=> 3,
        	'item_name'	=>	'something',
        	'item_description' => "ding dong",
        	'expired_at'	=>	'2014-4-3',
        	'quantity'		=> 3,
        );	

        // Uncomment the below to run the seeder
        DB::table('items')->insert($items);
    }

}