<?php
namespace Latifa\User\Http\Requests;
use App\Http\Requests\Request;

class LoginRequest extends Request {
	public function authorize() {
		return true;
	}

	public function rules() {
		return [
		'username' => 'required',
		'password' => 'required',
		];
	}
}

?>