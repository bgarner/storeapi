<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Banner;
use App\Models\District;
use App\Models\Region;

class Controller extends BaseController
{
    
    /* Stores */
    public function getAllStores(Request $request)
    {
        return Store::getAllStores($request);
    }
    public function getStoreByStoreNumber($storeNumber)
    {
    	return  Store::getStoreDetailsByStoreNumber($storeNumber);
    }    
    public function getAllStoreNameList()
    {
        return Store::getAllStoreNameList() ;
    }
    public function getStoresByDistrictId($id)
    {
    	return Store::getStoreDetailsByDistrictId($id);
    }
    public static function getStoresByRegionId($id)
    {
        return Store::getStoreDetailsByRegionId($id);
    }

    /* Banners */
    public function getAllBanners()
    {
        return Banner::getAllBanners();
    }
    public function getStoresByBannerid($id)
    {
    	return Banner::getStoreDetailsByBannerid($id);
    }
    
    public function getStoreByBannername($name)
    {
    	return Banner::getStoreDetailsByBannername($name);
    }



    /* Districts */
    public function getAlldistricts()
    {
    	return District::getAllDistricts();
    }

    public function getDistrictByDistrictId($id)
    {
    	return District::getDistrictDetailsByDistrictId($id);
    }
    public function getDistrictsByRegionId($id)
    {
    	return District::getDistrictDetailsByRegionId($id);
    }
    

    /* Regions */
    public function getAllRegions()
    {
    	return Region::getAllRegions();
    }
    public function getRegionByRegionId($id)
    {
    	return Region::getRegionDetailsByDistrictId($id);
    }
    

    public function ui()
    {
        return view('ui');
    }
}
