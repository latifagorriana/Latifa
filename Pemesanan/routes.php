<?php

//Guest's Pages
Route::get("/contact", "Latifa\User\Http\Controllers\ProfileController@contact");
Route::get("/listmenu", "Latifa\Pemesanan\Http\Controllers\MenuController@show");

//Register Customer
Route::get("/customer/register", "Latifa\Pemesanan\Http\Controllers\CustomerController@create2");
Route::post("/customer/store2", "Latifa\Pemesanan\Http\Controllers\CustomerController@store2");

//Must be login first!
Route::group(array('middleware'=>'auth'), function() {

	//Member Management
	Route::get("/customers", "Latifa\Pemesanan\Http\Controllers\CustomerController@index");
	Route::get("/daftar_customer", "Latifa\Pemesanan\Http\Controllers\CustomerController@indexAdmin");
	Route::get("/customers/{id}", "Latifa\Pemesanan\Http\Controllers\CustomerController@show")->where("id", "\d+");
	Route::get("/customers/{id}/edit", "Latifa\Pemesanan\Http\Controllers\CustomerController@edit");
	Route::post("/customers/{id}/update", "Latifa\Pemesanan\Http\Controllers\CustomerController@update");
	Route::get("/customers/{id}/delete", "Latifa\Pemesanan\Http\Controllers\CustomerController@delete");
	Route::get("/customers/{id}/pesan", "Latifa\Pemesanan\Http\Controllers\CustomerController@pesan");
	Route::post("/customers/{id}/prosespesan", "Latifa\Pemesanan\Http\Controllers\CustomerController@prosesPesan");

	//Menu Management
	Route::get("/daftar_menu", "Latifa\Pemesanan\Http\Controllers\MenuController@index");
	Route::get("/lihatmenu", "Latifa\Pemesanan\Http\Controllers\MenuController@indexKaryawan");
	Route::get("/menu/create", "Latifa\Pemesanan\Http\Controllers\MenuController@create");
	Route::post("/menu/store", "Latifa\Pemesanan\Http\Controllers\MenuController@store");
	Route::get("/daftar_menu/{id}/edit", "Latifa\Pemesanan\Http\Controllers\MenuController@edit");
	Route::post("/daftar_menu/{id}/update", "Latifa\Pemesanan\Http\Controllers\MenuController@update");
	Route::get("/daftar_menu/{id}/delete", "Latifa\Pemesanan\Http\Controllers\MenuController@delete");

});
?>