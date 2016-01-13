<?php
namespace Latifa\Pemesanan\Http\Controllers;

use Latifa\Pemesanan\Entity\Eloquent\Menu;

use Latifa\Pemesanan\Http\Requests\MenuRequest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
	public function create()
	{
		$menu= new Menu;
		return view("LatifaPemesanan::menu/form-addMenu")
		->with("url",url("/menu/store"))
		->with("menu",$menu)
		;
	}

	public function store(MenuRequest $request)
	{
		$menu = new Menu;
		$menu->nama		=$_POST['nama'];
		$menu->harga	=$_POST['harga'];
		$menu->jenis	=$_POST['jenis'];
		$menu->save();
		return redirect(url("/daftar_menu"));
	}

	public function index()
	{
		return view("LatifaPemesanan::menu.index", ['menu'=>Menu::all()]);
	}

	public function indexKaryawan()
	{
		return view("LatifaPemesanan::menu.indexKaryawan", ['menu'=>Menu::all()]);
	}

	public function menuMakanan()
	{
		return view("LatifaPemesanan::menu.index", ['menu'=>Menu::where('jenis',"makanan")->get()]);
	}


	public function show() {
		return view("LatifaPemesanan::menu.menu", ['menu'=>Menu::all()]);
	}

	public function edit($id) {
		$menu = Menu::find($id);
		return view("LatifaPemesanan::menu/form-editMenu")
		->with("url",url("/daftar_menu/$id/update"))
		->with("menu",$menu)
		;
	}

	public function update(MenuRequest $request, $id) {
		$menu= Menu::find($id);
		$menu->nama		        =$_POST['nama'];
		$menu->harga        	=$_POST['harga'];
		$menu->jenis        	=$_POST['jenis'];
		$menu->save();
		return redirect(url("/daftar_menu"));
	}

	public function delete($id){
		menu::destroy($id);
		return redirect(url("/daftar_menu"));
	}
	
	/*
	public function getMenu (){
		$dropdown= Menu::listdata(menu :: model()->findAll(), 'Id', 'nama');
		array ('empty'=>'--pilih siswa--');
		return $dropdown;
	}
	*/

}
?>
