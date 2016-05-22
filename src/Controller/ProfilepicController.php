<?php
namespace Abhitheawesomecoder\Profilepic\Controller;

use Abhitheawesomecoder\Profilepic\Model\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfilepicController extends Controller
{
	
	public function __construct()
    {
       $this->middleware('auth');
    }

    public function editprofilepic()
    { 
        $user_id = Auth::user()->id;

        $profile = Profile::where("user_id",$user_id)->first();

    	return view('profilepic::profilepic',["profile" => $profile]);
    	/*$user = User::find(Auth::user()->id);    
        return view('laraveleditprofile::editprofile',["user" => $user]);*/
    }

    public function saveeditprofilepic(Request $input){

        $user_id = Auth::user()->id;

        $profile = Profile::where("user_id",$user_id)->first();

        if($profile){

        }else{

            $profile = new Profile;
        }  

        $profile->user_id = $user_id;        

        $profile->profilepic = $input["picture"];

        $profile->save();

        return json_encode(["code" => 1]);

    }

}