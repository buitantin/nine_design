<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\General;
use Auth;

class GeneralController extends Controller
{
    //
    public function add(Request $request){
    	$data=array();
    	$error=array();
        
    	if($request->isMethod("post")){
    		$data=$request->all();
    		if(empty($data['name'])){
    			$error['name']="Vui lòng nhập tên";
    		}
    		if(empty($data['email'])){
    			$error['email']="Vui lòng nhập Email";
    		}
    		if(empty($data['address'])){
    			$error['address']="Vui lòng nhập địa chỉ";
    		}
    		if(empty($data['phone'])){
    			$error['phone']="Vui lòng nhập số điện thoại";
    		}
    		if(empty($error)){
    			$news=General::findOrNew(1);
    			$news->name=$data['name'];
    			$news->email=$data['email'];
    			$news->address=$data['address'];
    			$news->phone=$data['phone'];

            
                $news->hotline=$data['hotline'];                
                $news->picture=$data['picture']; 
                $news->facebook=$data['facebook']; 
                $news->skype=$data['skype']; 
                $news->twitter=$data['twitter']; 
                $news->google=$data['google'];
                

    			$news->seo_des=$data['seo_des'];
    			$news->seo_key=$data['seo_key'];
    			$news->save();

    			if(!empty($_FILES['logo'])){
    				move_uploaded_file($_FILES['logo']['tmp_name'], PUBLIC_PATH."/default/img/logo.png");
    			}
    			
    			return redirect()->back()->with("success","Cập nhật thành công.");;

    		}

    	}else{
    		$data=General::find(1);
    	}

    	

    	return View("admin.general.create",['data'=>$data,'error'=>$error]);
    }
}
