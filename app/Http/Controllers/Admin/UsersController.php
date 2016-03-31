<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use View;
use App\User;
use Auth;
use DB;
class UsersController extends Controller {

	public function login(Request $request){
		$data=array();
		$error="";
		if($request->isMethod("post")){
			
    
           $data=$request->all();
           if(empty($data['username']) || empty($data['password'])){
           		$error="Vui lòng nhập tên đăng nhập và mặt khẩu";
           }
    	  else{
    	  	$username=$data['username'];
    	  	$pass=md5($data['password']);
    	  	$user=User::whereRaw("email='$username' AND password='$pass'")->first();
    	  	if(!empty($user->id)){
    	  		if (Auth::loginUsingID($user->id))
		            {

		                return redirect("/admin/general/add");
		            }	
    	  	}
            	$error="Tên đăng nhập và mặt khẩu không chính xác";

            }
		}
		return View::make("admin.user.login",['data'=>$data,"error"=>$error]);
	}
	public function password(Request $request){
		$error=array();
		if($request->isMethod("post")){
			$password=$request->get("password");
			$reset=$request->get("reset");
			if(empty($password)){
				$error['password']="Vui lòng nhập mật khẩu";
			}
			if(empty($reset)){
				$error['reset']="Vui lòng nhập mật khẩu";
			}
			else{
				if($password!=$reset){
					$error['reset']="Vui lòng nhập đúng";
				}
			}
			if(empty($error)){
				$upda=User::find(Auth::user()->id);
				$upda->password=md5($password);
				$upda->save();
				echo "<script>alert('Cập nhật thành công')</script>";
			}
				
		}
		return View::make("admin.user.password",['error'=>$error]);
			
				
	}
	public function logout(){
		Auth::logout();
		return redirect("/admin/users/login");
	}
}
