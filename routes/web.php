<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

//store routes
$app->get('/stores', 'Controller@getAllStores');
$app->get('/stores/namelist', 'Controller@getAllStoreNameList');
$app->get('/store/{id}', 'Controller@getStoreByStoreNumber');
// $app->get('/stores?province={name:[a-zA-Z]+}', 'Controller@getAllStores');
// $app->get('/stores?city={name:[a-zA-Z\+]+}', 'Controller@getAllStores');

$app->get('/banners', 'Controller@getAllBanners');
$app->get('/banner/{id:\d+}/stores', 'Controller@getStoresByBannerid');
$app->get('/banner/{name:[a-zA-Z]+}/stores', 'Controller@getStoreByBannername');

$app->get('/districts', 'Controller@getAllDistricts');
$app->get('/district/{id}', 'Controller@getDistrictByDistrictId');
$app->get('/district/{id:\d+}/stores', 'Controller@getStoresByDistrictId');

$app->get('/regions', 'Controller@getAllRegions');
$app->get('/region/{id}', 'Controller@getRegionByRegionId');
$app->get('/region/{id:\d+}/districts', 'Controller@getDistrictsByRegionId');
$app->get('/region/{id:\d+}/stores', 'Controller@getStoresByRegionId');


$app->get('/login', 'Auth\AuthController@getLogin');
$app->post('/login', 'Auth\AuthController@postLogin');
$app->get('/register', 'Auth\AuthController@getRegister');
$app->post('/register', 'Auth\AuthController@postRegister');

$app->get('/ui', 'Controller@ui');
// $app->get('/admin/organizestores', )
/**
 * Routes for resource district-admin-controller
 */
$app->get('district-admin-controller', 'DistrictAdminControllersController@all');
$app->get('district-admin-controller/{id}', 'DistrictAdminControllersController@get');
$app->post('district-admin-controller', 'DistrictAdminControllersController@add');
$app->put('district-admin-controller/{id}', 'DistrictAdminControllersController@put');
$app->delete('district-admin-controller/{id}', 'DistrictAdminControllersController@remove');

/**
 * Routes for resource store-assignment-controller
 */
$app->get('store-assignment-controller', 'StoreAssignmentControllersController@all');
$app->get('store-assignment-controller/{id}', 'StoreAssignmentControllersController@get');
$app->post('store-assignment-controller', 'StoreAssignmentControllersController@add');
$app->put('store-assignment-controller/{id}', 'StoreAssignmentControllersController@put');
$app->delete('store-assignment-controller/{id}', 'StoreAssignmentControllersController@remove');

/**
 * Routes for resource store-admin-controller
 */
$app->get('store-admin-controller', 'StoreAdminControllersController@all');
$app->get('store-admin-controller/{id}', 'StoreAdminControllersController@get');
$app->post('store-admin-controller', 'StoreAdminControllersController@add');
$app->put('store-admin-controller/{id}', 'StoreAdminControllersController@put');
$app->delete('store-admin-controller/{id}', 'StoreAdminControllersController@remove');

/**
 * Routes for resource region-admin-controller
 */
$app->get('region-admin-controller', 'RegionAdminControllersController@all');
$app->get('region-admin-controller/{id}', 'RegionAdminControllersController@get');
$app->post('region-admin-controller', 'RegionAdminControllersController@add');
$app->put('region-admin-controller/{id}', 'RegionAdminControllersController@put');
$app->delete('region-admin-controller/{id}', 'RegionAdminControllersController@remove');

/**
 * Routes for resource district-assignment-controller
 */
$app->get('district-assignment-controller', 'DistrictAssignmentControllersController@all');
$app->get('district-assignment-controller/{id}', 'DistrictAssignmentControllersController@get');
$app->post('district-assignment-controller', 'DistrictAssignmentControllersController@add');
$app->put('district-assignment-controller/{id}', 'DistrictAssignmentControllersController@put');
$app->delete('district-assignment-controller/{id}', 'DistrictAssignmentControllersController@remove');
