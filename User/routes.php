<?php

//autentifikasi
Route::get('/auth/login', ['as'=>'user_auth_login',
	'uses'=>'Latifa\User\Http\Controllers\AuthController@loginForm']);
Route::post('/proses-login', ['as'=>'user_auth_proses',
	'uses'=>'Latifa\User\Http\Controllers\AuthController@prosesLogin']);
Route::get('/auth/logout', ['as'=>'user_auth_logout',
	'uses'=>'Latifa\User\Http\Controllers\AuthController@logout']);

//Must be login first!
Route::group(array('middleware'=>'auth'), function() {

	//Register karyawan
	Route::get("/user/register", "Latifa\User\Http\Controllers\UserController@create");
	Route::post("/user/store", "Latifa\User\Http\Controllers\UserController@store");

	//User Management
	Route::get("/users", "Latifa\User\Http\Controllers\UserController@index");
	Route::get("/user", "Latifa\User\Http\Controllers\UserController@karyawanUser");
	Route::get("/user/{id}/edit", "Latifa\User\Http\Controllers\UserController@edit");
	Route::post("/user/{id}/update", "Latifa\User\Http\Controllers\UserController@update");
	Route::get("/user/{id}/delete", "Latifa\User\Http\Controllers\UserController@delete");

	//Profile Management
	Route::get("/karyawan", "Latifa\User\Http\Controllers\ProfileController@index");
	Route::get("/profile", "Latifa\User\Http\Controllers\ProfileController@karyawanProfile");
	Route::get("/profile/{id}", "Latifa\User\Http\Controllers\ProfileController@show")->where("id", "\d+");
	Route::get("/profile/{id}/edit", "Latifa\User\Http\Controllers\ProfileController@edit");
	Route::post("/profile/{id}/update", "Latifa\User\Http\Controllers\ProfileController@update");
});
?>