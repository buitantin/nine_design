<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Catechild;
use App\Cate;

class CatechildController extends Controller
{
    public function add(Request $request){
    	$error=array();
    	$data=array();

        $listcate=Cate::listall();

    	if($request->isMethod("post")){
    		$data=$request->all();
    		if(empty($data['name'])){
    			$error['name']="Vui lòng nhập dữ liệu";
    		}
    		if(empty($data['description'])){
    			$error['description']="Vui lòng nhập dữ liệu";
    		}
    		if(empty($data['quote'])){
    			$error['quote']="Vui lòng nhập dữ liệu";
    		}
    		if(!$request->hasFile("icon")){
    			$error['icon']="Vui lòng nhập dữ liệu";	
    		}
    		if(!$request->hasFile("images")){
    			$error['images']="Vui lòng nhập dữ liệu";	
    		}
    		if(empty($error)){
    			$new=new Catechild;
    			$new->name=$data['name'];
    			$new->description=$data['description'];
    			$new->quote=$data['quote'];
    			$new->is_hot=$data['is_hot'];
                $new->cid_cate=$data['cid_cate'];
    			$new->save();

    			if($request->file("icon")->isValid()){
    				$request->file("icon")->move(CATECHILD_PATH."icon/" ,"icon_".$new->id.".png");
    			}
    			if($request->file("images")->isValid()){
    				$request->file("images")->move(CATECHILD_PATH,"cate_".$new->id.".png");
    			}
    			return redirect("/admin/catechild/show")->with("success","Lưu thành công.");

    		}

    	}
    	return View("admin.catechild.add",['data'=>$data,'error'=>$error,'listcate'=>$listcate]);

    }
    public function show(){
        $listcate=Cate::listall();
        $search='';
        if(isset($_GET['search'])){
            $list=Catechild::whereRaw("cid_cate={$_GET['search']}")->paginate(10);
        }else{
            $list=Catechild::paginate(10);    
        }
    	
    	return View("admin.catechild.show",['list'=>$list,'listcate'=>$listcate,'search'=> $search]);
    }
     public function cate($id){
        
        $list=Catechild::whereRaw("cid_cate=$id")->orderBy("id","DESC")->paginate(10);    
         $listcate=Cate::listall();
        return View("admin.catechild.cate",['list'=>$list,'listcate'=>$listcate]);
    }
    public function edit($id,Request $request){
    	$error=array();
    	$data=array();

        $listcate=Cate::listall();

    	if($request->isMethod("post")){
    		$data=$request->all();
    		if(empty($data['name'])){
    			$error['name']="Vui lòng nhập dữ liệu";
    		}
    		if(empty($data['description'])){
    			$error['description']="Vui lòng nhập dữ liệu";
    		}
    		if(empty($data['quote'])){
    			$error['quote']="Vui lòng nhập dữ liệu";
    		}
    	
    		if(empty($error)){
    			$new= Catechild::find($id);
    			$new->name=$data['name'];
    			$new->description=$data['description'];
    			$new->quote=$data['quote'];
    			$new->is_hot=$data['is_hot'];
                $new->cid_cate=$data['cid_cate'];
    			$new->save();

    			if($request->hasFile("icon"))
    			if($request->file("icon")->isValid()){
    				$request->file("icon")->move(CATECHILD_PATH."icon/" ,"icon_".$new->id.".png");
    			}

    			if($request->hasFile("images"))
    			if($request->file("images")->isValid()){
    				$request->file("images")->move(CATECHILD_PATH,"cate_".$new->id.".png");
    			}
    			return redirect("/admin/catechild/show")->with("success","Lưu thành công.");

    		}

    	}
    	$data=Catechild::find($id);
    	return View("admin.catechild.edit",['data'=>$data,'error'=>$error,'listcate'=>$listcate]);
    }
    public function remove($id){
        return 	Catechild::whereRaw("id=$id")->delete();
    }
}
