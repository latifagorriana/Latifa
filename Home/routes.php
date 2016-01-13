<?php

//Landing
Route::get("/latifaProject", function() {
	return view('LatifaHome::index');
});

//Construct
Route::get("/home", "Latifa\Home\Http\Controllers\HomeController@index");

//middleware
Route::group(array('middleware'=>'auth'), function() {
	
	Route::get('/success', function() {
		return view('LatifaHome::info.success');
	});
});


//info
Route::get('/abort', function() {
	return view('LatifaHome::info.abort');
});
Route::get('/escape', function() {
	return view('LatifaHome::info.escape');
});
Route::get('/registered', function() {
	return view('LatifaHome::info.registered');
});