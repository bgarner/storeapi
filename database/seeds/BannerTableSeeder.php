<?php

use Illuminate\Database\Seeder;

class BannerTableSeeder extends Seeder
{
    private $banners = [
    	['name' => 'Sportchek' ],
    	['name' => 'Atmosphere' ]

    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->banners as $banner) {
        	DB::table('banners')->insert($banner);
        }
    }
}
