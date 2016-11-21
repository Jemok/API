<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

    $api->group(['middleware' => ['cors']], function($api){

        $api->post('/auth/register', '\App\Api\V1\Auth\Controllers\RegistrationController@register');
    });

    $api->group(['middleware' => ['cors'], 'prefix' => 'locations'], function($api){

        $api->get('/', '\App\Api\V1\Location\Controllers\LocationController@index');
    });

    $api->group(['middleware' => ['cors'], 'prefix' => 'parcels'], function($api){

        $api->get('/', '\App\Api\V1\Parcels\Controllers\ParcelController@index');
    });


    $api->group(['middleware' => ['auth:api', 'cors'], 'prefix' => 'users'], function($api){
        $api->get('/', 'UserController@getUser');

    });
});

