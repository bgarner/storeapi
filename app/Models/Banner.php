<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BannerStore;

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
		$stores = BannerStore::join('stores','stores.id','=','banner_store.store_id')
					->where('banner_id', $id)
					->get();
		
		if (count($stores) > 0) {
			return $stores;
		}else {
			return array();
		}
	}

	public  static function getStoreDetailsByBannername($banner)
	{
		
		$stores = BannerStore::join('stores','stores.id','=','banner_store.store_id')
					->join('banners', 'banners.id', '=', 'banner_store.banner_id')
					->where('banners.name', $banner)
					->get();

		if (count($stores) > 0) {
			return $stores;
		}else {
			return array();
		}
	}

}
