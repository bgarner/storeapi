<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    private $statuses = [
    	['name' => 'open'],
    	['name' => 'closed'],
    	['name' => 'under reno'],

    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->statuses as $status) {
        	DB::table('status')->insert($status);
        }
    }
}
