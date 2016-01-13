<?php
namespace Latifa\Pemesanan\Http\Requests;
use App\Http\Requests\Request;

class MenuRequest extends Request {
	public function authorize() {
		return true;
	}

	public function rules() {
		return [
		'nama'   	=>"required",
		'harga'     =>"required",
		'jenis'     =>"required",
		];
	}
}