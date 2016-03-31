<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Slide;

class SlideController extends Controller
{
    //
    public function add(Request $request){

    	$data=array();
    	$error=array();
    	if($request->isMethod("post")){
    		$data=$request->all();
    		$file=$_FILES['images'];
    		if(empty($data['name'])){
    			$error['name']="Vui lòng nhập tiêu đề";
    		}
    		if(empty($data['description'])){
    			$error['description']="Vui lòng nhập mô tả";
    		}
    		if(empty($file['name'])){
    			$error['images']="Vui lòng nhập hình ảnh";
    		}
    		if(empty($error)){
    			$news=new Slide;
    			$news->name=$data['name'];
    			$news->description=$data['description'];
    			$news->save();

    			move_uploaded_file($file['tmp_name'], SLIDESHOW_PATH."slide_".$news->id.".png");

    			return redirect("/admin/slideshow/show")->with("success","Lưu thành công");



    		}


    	}

    	return View("admin.slide.add",['data'=>$data,'error'=>$error]);
    }
    public function show(){
    		$pagi=SLide::orderBy("id","DESC")->paginate(10);

    		return View("admin.slide.show",['list'=>$pagi]);
    }
    public function edit($id,Request $request){
    		$data=array();
    	$error=array();


    	if($request->isMethod("post")){
    		$data=$request->all();
    		$file=$_FILES['images'];
    		if(empty($data['name'])){
    			$error['name']="Vui lòng nhập tiêu đề";
    		}
    		if(empty($data['description'])){
    			$error['description']="Vui lòng nhập mô tả";
    		}
    	
    		if(empty($error)){
    			$updated=SLide::find($id);
    			$updated->name=$data['name'];
    			$updated->description=$data['description'];
    			$updated->save();
    			if(!empty($file['name'])){
    				move_uploaded_file($file['tmp_name'], SLIDESHOW_PATH."slide_".$updated->id.".png");
    			}
    			

    			return redirect("/admin/slideshow/show")->with("success","Lưu thành công");



    		}


    	}

    	$data=Slide::find($id);

    	return View("admin.slide.edit",['data'=>$data,'error'=>$error]);
    }
    public function remove($id){
    	Slide::find($id)->delete();
    	@unlink(SLIDESHOW_PATH."slide_$id.png");
    	return '';
    }
}
