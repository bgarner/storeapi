<?php

use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    private $districts = [

	    ["name" => 'Atlantic Canada'],
		["name" => 'Maritimes'],
		["name" => 'Ottawa'],
		["name" => 'Ontario Southwest'],
		["name" => 'Ontario Southeast'],
		["name" => 'GTA Southwest'],
		["name" => 'GTA East'],
		["name" => 'GTA South'],
		["name" => 'GTA North'],
		["name" => 'GTA Northwest'],
		["name" => 'Ontario East'],
		["name" => 'Atmosphere Prairies'],
		["name" => 'Atmosphere BC'],
		["name" => 'Manitoba'],
		["name" => 'Saskatchewan'],
		["name" => 'Edmonton West'],
		["name" => 'Edmonton East'],
		["name" => 'Calgary South'],
		["name" => 'Calgary North'],
		["name" => 'GVA Interior'],
		["name" => 'GVA Island'],
		["name" => 'GVA North']


    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->districts as $district)
        {
        	DB::table('districts')->insert($district);
        } 
    }
}
