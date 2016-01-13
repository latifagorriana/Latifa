<?php
namespace Latifa\User\Http\Requests;
use App\Http\Requests\Request;

class RegisterRequest extends Request {
	public function authorize() {
		return true;
	}

	public function rules() {
		return [
		 "username"=>"required|min:4|max:12|unique:user,username",
		 "password"=>"required|min:6|max:12",
		 "telp"	   =>"numeric",
		];
	}
}