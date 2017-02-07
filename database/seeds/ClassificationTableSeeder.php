<?php

use Illuminate\Database\Seeder;

class ClassificationTableSeeder extends Seeder
{
    private $classifications = [
    	['name' => 'combo'],
    	['name' => 'flagship'],
    	['name' => 'fleet'],
    	['name' => 'hero'],

    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		foreach ($this->classifications as $classification) {
        	DB::table('classifications')->insert($classification);
        }
    }
}
