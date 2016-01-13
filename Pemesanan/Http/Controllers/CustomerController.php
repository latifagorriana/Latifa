<?php
namespace Latifa\Pemesanan\Http\Controllers;
use Latifa\Pemesanan\Entity\Eloquent\Customer;
use Latifa\Pemesanan\Entity\Eloquent\Menu;

use Illuminate\Http\Request;
use Latifa\Pemesanan\Http\Requests\RegisterCustomerRequest;
use Latifa\Pemesanan\Http\Requests\EditCustomerRequest;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function create2()
    {
        $customer= new Customer;
        return view("LatifaPemesanan::customer/form-regCustomer")
        ->with("url",url("/customer/store2"))
        ->with("customer",$customer)
        ;
    }

    public function store2(RegisterCustomerRequest $request)
    {
        $customer = new Customer;
        $customer->nama      =$_POST['nama'];
        $customer->alamat    =$_POST['alamat'];
        $customer->telpon    =$_POST['telpon'];
        $customer->save();
        return redirect(url("/registered"));
    }

    public function index()
    {   
        return view("LatifaPemesanan::customer.index", ['customer'=>Customer::all()]);
    }

    public function indexAdmin()
    {
        return view("LatifaPemesanan::customer.indexadmin", ['customer'=>Customer::all()]);
    }

    public function show($id)
    {
       $customer=Customer::find($id);
        return view("LatifaPemesanan::customer.show", array("customer"=>$customer));
    }

     public function edit($id)
    {
        $customer = Customer::find($id);
        return view("LatifaPemesanan::customer/form-edit")
        ->with("url",url("/customers/$id/update"))
        ->with("customer",$customer)
        ;
    }

    public function update(EditCustomerRequest $request,$id)
    {
        $customer = Customer::find($id);
        $customer->nama      =$_POST['nama'];
        $customer->alamat    =$_POST['alamat'];
        $customer->telpon    =$_POST['telpon'];
        $customer->save();
        return redirect(url("/customers"));
    }

    public function delete($id)
    {
        customer::destroy($id);
        return redirect(url("/customers"));
    }

    public function pesan($id){
        $customer = Customer::find($id);
        $list_menu = Menu::all();
        return view("LatifaPemesanan::customer/form-pesan")
        ->with("url",url("/customers/$id/prosespesan"))
        ->with("customer",$customer)
        ->with("list_menu", $list_menu)
        ;
    }

    public function prosesPesan($id) {
        $customer = Customer::find($id);
        $customer->waktu_pesan = new \DateTime;
        $customer->save();
        if(isset($_POST['menu']))
            $customer->menu()->sync($_POST['menu']);
        else
            $customer->menu()->sync(array());
        return redirect(url("/customers"));
    }

    public function __construct() {
        $this->middleware('guest', array(
            'only'=>array('create', 'store')
            ));
    } 
}