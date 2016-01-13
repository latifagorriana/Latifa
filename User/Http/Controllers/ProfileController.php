<?php
namespace Latifa\User\Http\Controllers;

use Latifa\User\Entity\Eloquent\Profile;
use Latifa\User\Http\Requests\EditProfileRequest;
use Latifa\User\Http\Requests\EditUserRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    
    public function index()
    {   if(\Auth::user()->level == "karyawan")
            return redirect("/profile");
        else
        return view("LatifaUser::profile.index", ['profile'=>Profile::all()]);
    }

    
    public function karyawanProfile() {
        $profile=Profile::where("user_id", \Auth::user()->id)->paginate(11);
        return view("LatifaUser::profile.karyawan")
        ->with("profile", $profile);
    }
    
    public function show($id)
    {
       $profile=Profile::find($id);
        return view("LatifaUser::profile.show", array("profile"=>$profile));
    }

    public function edit($id)
    {
        $profile = Profile::find($id);
        return view("LatifaUser::profile/form-edit")
        ->with("url",url("/profile/$id/update"))
        ->with("profile",$profile)
        ;
    }

    public function update(EditProfileRequest $request,$id)
    {
        $profile = Profile::find($id);
        $profile->nama      =$_POST['nama'];
        $profile->alamat    =$_POST['alamat'];
        $profile->telpon      =$_POST['telpon'];
        $profile->save();
        return redirect(url("/karyawan"));
    }

   
    public function delete($id)
    {
        Profile::destroy($id);
        return redirect(url("/karyawan"));
    }

    public function contact()
    {   
        return view("LatifaUser::profile.contact", ['profile'=>Profile::all()]);
    }
}
