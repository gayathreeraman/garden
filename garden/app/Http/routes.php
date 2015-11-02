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

// 
// Route::get('home',['middleware' => 'auth',function(){
// 	return view ('home');
// }]);

Route::get('/','GardenController@home');

// Route::get('/', function () {
	
//     return view('home');
// });

Route::get('/login', function () {
	
    return view('login');
});

// Route::get('home/savedlayout', function () {
	
//     return view('savedlayout');
// });




Route::get('api/item/category/{category}', 'ItemController@getByCategory'); 


Route::get('garden','GardenController@viewAll');
Route::get('garden/{garden_id}','GardenController@view');

Route::post('api/garden/layout_name','GardenController@saveTitle');
Route::post('api/garden/save_item','GardenController@saveItem');


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


// Route::get('/', 'GardenController@update');
// Route::post('/', 'GardenController@postUpdate');

Route::get('garden/{id}/delete', 'GardenController@delete');


