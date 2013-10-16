<?php

/*
| Route for all frontend
*/
Route::get('/welcome', 'FrontendController@welcome');
Route::get('/', 'FrontendController@index');
Route::get('/detail/{id}', 'FrontendController@detail');
Route::get('/type/{type}', 'FrontendController@type');
Route::get('/category/{cat}', 'FrontendController@category');
Route::get('/search', 'FrontendController@search');

Route::get('/not-found', function() {
	return View::make('offer.notfound');
});




/*
| Route for admin panel login
*/

Route::get('za/mdnite/login', array('before' => 'logincheck', 'uses' =>'AdminController@showLogin'));

Route::post('za/mdnite/login', 'AdminController@adminLogin');

/*
| Route for admin panel
*/

Route::get('/logout', function() {
	Sentry::logout();
    return Redirect::to('za/mdnite/login');
});

Route::get('za/mdnite', array('before' => 'sauth', 'uses' => 'AdminController@index'));

Route::get('za/mdnite/add-offer', array('before' => 'sauth', 'uses' => 'AdminController@offer'));

Route::post('za/mdnite/add-offer', array('before' => 'sauth', 'uses' => 'AdminController@addOffer'));

Route::get('za/mdnite/all-offers', array('before' => 'sauth', 'uses' => 'AdminController@allOffer'));

Route::get('za/mdnite/all-offers/{type}', array('before' => 'sauth', 'uses' => 'AdminController@getBytype'));

Route::get('za/mdnite/item-detail/{id}', array('before' => 'sauth', 'uses' => 'AdminController@itemDetail'));

Route::get('za/mdnite/edit/{id}', array('before' => 'sauth', 'uses' => 'AdminController@edit'));

Route::post('za/mdnite/edit/{id}', array('before' => 'sauth', 'uses' => 'AdminController@editOffer'));

Route::get('za/mdnite/delete/{id}', array('before' => 'sauth', 'uses' => 'AdminController@deleteOffer'));

Route::get('za/mdnite/upload', array('before' => 'sauth',  function(){
	return View::make('admin.upload');
}));

Route::post('za/mdnite/upload', array('before' => 'sauth', 'as' => 'upload', 'uses' => 'AdminController@upload'));

Route::post('za/mdnite/fileDelete', array('before' => 'sauth', 'as' => 'fileDelete', function(){
	$filename = Input::get('name');
	$directory = public_path() . '/pictures/';
	File::delete($directory . $filename);

	return Response::json('success', 200);
}));

Route::get('za/mdnite/all-images', array('before' => 'sauth', function() {
	$images = Images::all()->toArray();
	return View::make('admin.allimages')
					->with ('images', $images);
}));
Route::get('za/mdnite/images/delete/{id}', array('before' => 'sauth', 'uses' => 'AdminController@deleteImage'));

Route::get('za/mdnite/passchange', array('before' => 'sauth', 'uses' => 'AdminController@getChange'));

Route::post('za/mdnite/passchange', array('before' => 'sauth', 'uses' => 'AdminController@passChange'));