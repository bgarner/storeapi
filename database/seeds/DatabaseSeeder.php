<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('BannerTableSeeder');
        $this->call('StoreTableSeeder');
        $this->call('DistrictTableSeeder');
        $this->call('RegionTableSeeder');
        $this->call('ClassificationTableSeeder');
        $this->call('StatusTableSeeder');
        $this->call('BannerStorePivotSeeder');
        $this->call('DistrictStorePivotSeeder');
        $this->call('DistrictRegionPivotSeeder');

    }
}
