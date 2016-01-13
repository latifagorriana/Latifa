<?php
namespace Latifa\Pemesanan\Http\Requests;
use App\Http\Requests\Request;

class RegisterCustomerRequest extends Request {
	public function authorize() {
		return true;
	}

	public function rules() {
		return [
		 "nama"	   =>"required",
		 "alamat"  =>"required",
		 "telpon"  =>"required|numeric",
		];
	}
}