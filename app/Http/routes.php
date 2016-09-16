<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('layout.app');
});

Route::resource('articles', 'ArticlesController');
Route::resource('schedules', 'SchedulesController');
Route::resource('days', 'DaysController');


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ['namespace' => '\App\Http\Controllers\API\v1'], function ($api) {
    $api->resource('articles', 'ArticlesController');

    $api->get('schedules', 'SchedulesController@index');

    $api->post('devices', 'DevicesController@store');
});

Route::auth();

Route::get('/home', 'HomeController@index');
