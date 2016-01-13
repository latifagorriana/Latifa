<?php
namespace Latifa\Home\Http\Controllers;
use App\Http\Controllers\Controller;

class HomeController extends Controller {
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		return view('LatifaHome::info.error');
	}
}
