<?php

use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    private $regions = [
    	['name' => 'East' ],
    	['name' => 'East' ],
    	['name' => 'West' ],
    	['name' => 'West' ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->regions as $region) {
        	DB::table('regions')->insert($region);
        }
    }
}
