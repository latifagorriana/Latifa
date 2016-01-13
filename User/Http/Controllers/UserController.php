<?php
namespace Latifa\User\Http\Controllers;

use Latifa\User\Entity\Eloquent\User;
use Latifa\User\Entity\Eloquent\Profile;
use Latifa\User\Http\Requests\RegisterRequest;
use Latifa\User\Http\Requests\EditUserRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public function index()
    {
        if(\Auth::user()->level == "karyawan")
            return redirect("/user");
        else
        return view("LatifaUser::user.index", ['user'=>User::all()]);
    }

    public function karyawanUser() {
        $user=User::where("id", \Auth::user()->id)->paginate(2);
        return view("LatifaUser::user.karyawan")
        ->with("user", $user);
    }

    public function create()
    {
        $user= new User;
        return view("LatifaUser::user/form-reg")
        ->with("url",url("/user/store"))
        ->with("user",$user)
        ;
    }

    public function store(RegisterRequest $request)
    {
        $user = new User;
        $user->username =$_POST['username'];
        $user->password =$_POST['password'];
        $user->level    ="karyawan";
        $user->save();
        
        $profile = new Profile;
        $profile->nama      =$_POST['nama'];
        $profile->alamat    =$_POST['alamat'];
        $profile->telpon      =$_POST['telpon'];
        $profile->user_id   =$user->id;
        $profile->save();
        return redirect(url("/users"));
    }

    public function show($id) {
        $user=User::find($id);
        return view("LatifaUser::user.show", array("user"=>$user));
    }

    public function edit($id)
    {
         $user = User::find($id);
        return view("LatifaUser::user/form-edit")
        ->with("url",url("/user/$id/update"))
        ->with("user",$user)
        ;
    }

    public function update(EditUserRequest $request,$id)
    {
        $user = User::find($id);
        $user->username =$_POST['username'];
        $user->password =$_POST['password'];
        $user->save();
        return redirect(url("/users"));
    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect(url("/users"));
    }
}