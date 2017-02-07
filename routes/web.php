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


$app->get('/login', 'Auth\AuthController@getLogin');
$app->post('/login', 'Auth\AuthController@postLogin');
$app->get('/register', 'Auth\AuthController@getRegister');
$app->post('/register', 'Auth\AuthController@postRegister');