<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model {

    protected $table = 'stores';

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    public static function getAllStores($request)
    {
    	if(isset($request['province'])){
    		return Store::getStoreDetailsByProvince($request->province);
    	}
    	if(isset($request['city'])){
    		return Store::getStoreDetailsByCity($request->city);
    	}
    	
    	return Store::all();	
    	
    	
    }

    public static function getAllStoreNameList()
	{
		$stores = Store::select('store_id', 'name', 'city')->get();
                
        $searchList = [];
        foreach ($stores as $store) {
            $searchItem = [
                'value' => $store->store_id,
                'label' => $store->store_id . " - " . $store->name . ", " . $store->city 
            ];
            array_push($searchList, ($searchItem) );
            
        }   
        
        return ( json_encode ( $searchList ) );
	}

	public static function getStoreDetailsByStoreNumber($id)
	{
		$storedetails = Store::where('store_number', $id)->first();
		if ($storedetails) {
			return $storedetails;
		}else{
			return array();
		}
	}
	
	public static function getStoreDetailsByProvince($province)
	{
		$stores = Store::where('province', $province)->get();
		if (count($stores) > 0) {
			return $stores;
		}else {
			return array();
		}
	}
	public static function getStoreDetailsByCity($city)
	{
		$city = preg_replace("/\+/", " " , $city);
		$stores = Store::where('city', $city)->get();
		if ( count($stores) > 0) {
			return $stores;
		}else {
			return array();
		}
		
	}

	public static function getStoreDetailsByDistrictId($id)
    {
    	$stores = Store::join('district_store', 'district_store.store_id', '=', 'stores.id')
					                ->where('district_store.district_id', $id)
					                ->select('stores.*')
					                ->get();
        if(count($stores)>0){
    		return $stores;
    	}
    	return [];
    } 

}
