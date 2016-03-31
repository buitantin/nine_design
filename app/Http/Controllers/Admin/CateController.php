<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cate;

class CateController extends Controller
{
    //
    public function show(){
    	$list=Cate::paginate(10);
    	return View("admin.cate.show",['list'=>$list]);
    }
    public function edit($id,Request $request){
    	$error=array();
    	$data=array();
    	if($request->isMethod("post")){
    		$data=$request->all();

    		if(empty($data['name'])){
    			$error['name']="Vui lòng nhập dữ liệu";
    		}
    		if(empty($data['description'])){
    			$error['description']="Vui lòng nhập dữ liệu";
    		}
    		if(empty($data['content'])){
    			$error['name']="Vui lòng nhập dữ liệu";
    		}
    		if(empty($error)){
    			$new=Cate::findOrNew($id);

    			$new->name=$data['name'];
    			$new->description=$data['description'];
    			$new->content=$data['content'];

    			$new->save();
    			if($request->hasFile("images"))
    			if($request->file("images")->isValid()){
    				$request->file("images")->move(CATE_PATH,"cate_".$new->id.".png");
    			}

    			return redirect("/admin/cate/show")->with("success","Lưu thành công");
    		}
    	}
    	$data=Cate::findOrNew($id);
    	return View("admin.cate.edit",['error'=>$error,'data'=>$data]);
    }
}
