<?php
namespace Latifa\User\Http\Requests;
use App\Http\Requests\Request;

class EditProfileRequest extends Request {
	public function authorize() {
		return true;
	}

	public function rules() {
		return [
		 "nama"	   =>"required",
		 "alamat"  =>"required",
		 "telpon"	   =>"required|numeric",
		];
	}
}