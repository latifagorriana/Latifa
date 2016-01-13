<?php
namespace Latifa\User\Http\Requests;
use App\Http\Requests\Request;

class EditUserRequest extends Request {
	public function authorize() {
		return true;
	}

	public function rules() {
		return [
		 "username"=>"required|min:4|max:12|unique:user",
		 "password"=>"required|min:5|max:12|confirmed",
		];
	}
}