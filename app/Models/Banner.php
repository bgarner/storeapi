<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Store;

class Banner extends Model {

    protected $table = 'banners';

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    public static function getAllBanners()
    {
    	$banners = Banner::all();
		if ( count($banners) > 0 ) {
			return $banners;
		}else {
			return array();
		}

    }

    public static function getStoreDetailsByBannerid($id)
	{
		$stores = Store::join('banner_store','stores.id','=','banner_store.store_id')
					->where('banner_id', $id)
					->select('stores.*', 'banner_store.banner_id')
					->get();
		
		if (count($stores) > 0) {
			return $stores;
		}else {
			return array();
		}
	}

	public  static function getStoreDetailsByBannername($banner)
	{
		
		$stores = Store::join('banner_store','stores.id','=','banner_store.store_id')
					->join('banners', 'banners.id', '=', 'banner_store.banner_id')
					->where('banners.name', $banner)
					->select('stores.*', 'banner_store.banner_id')
					->get();

		if (count($stores) > 0) {
			return $stores;
		}else {
			return array();
		}
	}

}
