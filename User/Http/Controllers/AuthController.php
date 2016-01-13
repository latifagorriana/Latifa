<?php
namespace Latifa\User\Http\Controllers;
use App\Http\Controllers\Controller;
use Latifa\User\Entity\Eloquent\User;
use Illuminate\Http\Request;
use Latifa\User\Http\Requests\LoginRequest;
use Illuminate\Support\Facedes\Validator;


class AuthController extends Controller {

	public function loginForm() {
		return view('LatifaUser::user.form-login');
	}

	public function prosesLogin(LoginRequest $request) {
	$user=User::
	where ("username",$_POST['username'])->
	where ("password",$_POST['password'])->
	get();
    if($user->count()==0){
    	return redirect()->to('/abort');
}
else
{
	\Auth::login($user->first());
	return redirect()->to('/success');
}
}

	public function logout() {
		\Auth::logout();
		return redirect()->to('/escape');
	}

	public function __construct() {
		$this->middleware('guest', array(
			'only'=>array('loginForm', 'prosesLogin')
			));
		$this->middleware('auth', array('only' =>array('logout')));
	} 
}