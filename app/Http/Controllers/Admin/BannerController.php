<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Banner;
use App\Catechild;
class BannerController extends Controller
{
    //
    public function add(Request $request){
    	$error=array();
    	$data=array();

        $listcate=array();
        
    	$listcate=Catechild::listall();
    	$listcate[0]="Trang chủ";

    	if($request->isMethod("post")){
    		$data=$request->all();
    		if(empty($data['link'])){
    			$error['link']="Vui lòng nhập dữ liệu";
    		}
    		if(!$request->hasFile("images")){
    			$error['images']="Vui lòng nhập dữ liệu";
    		}
    		if(empty($error)){
    			$new = new Banner;
    			$new->link=$data['link'];
    			$new->cid_cate=$data['cid_cate'];
    			$new->save();

    			if($request->file("images")->isValid()){
    				$request->file("images")->move(BANNER_PATH,"banner_".$new->id.".png");

    			}
    			return redirect("/admin/banner/show")->with("success","Lưu thành công.");
    		}

    	}

    	return View("admin.banner.add",['data'=>$data,'error'=>$error,'listcate'=>$listcate]);
    }
    public function show(){
            $listcate=Catechild::listall();
        $listcate[0]="Trang chủ";

    	$list=Banner::paginate(10);
    	return View("admin.banner.show",['list'=>$list,'listcate'=>$listcate]);
    }
    public function edit($id,Request $request){
    	$error=array();
    	$data=array();

    	$listcate=Catechild::listall();
    	$listcate[0]="Trang chủ";

    	if($request->isMethod("post")){
    		$data=$request->all();
    		if(empty($data['link'])){
    			$error['link']="Vui lòng nhập dữ liệu";
    		}
    		
    		if(empty($error)){
    			$new = Banner::find($id);
    			$new->link=$data['link'];
    			$new->cid_cate=$data['cid_cate'];
    			$new->save();

    			if($request->hasFile("images"))
    			if($request->file("images")->isValid()){
    				$request->file("images")->move(BANNER_PATH,"banner_".$new->id.".png");

    			}
    			return redirect("/admin/banner/show")->with("success","Lưu thành công.");
    		}

    	}
        $data=Banner::find($id);

    	return View("admin.banner.edit",['data'=>$data,'error'=>$error,'listcate'=>$listcate]);
    }
    public function remove($id){
        return Banner::where("id","=",$id)->delete();
    }
}
