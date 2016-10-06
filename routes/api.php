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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::get('test-events', function(Request $request){
	$arr = [
		'events' => [
			['name' => 'test', 'start_date'=> '10/6/2016', 'end_date'=>'10/26/2016'],
			['name' => 'test', 'start_date'=> '10/6/2016', 'end_date'=>'10/26/2016'],
			['name' => 'test', 'start_date'=> '10/6/2016', 'end_date'=>'10/26/2016']
		]
	];
	return $arr;
});