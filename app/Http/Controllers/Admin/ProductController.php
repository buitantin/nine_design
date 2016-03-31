<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Cate;
use App\Catechild;
use App\Library\Data;
use DB;

class ProductController extends Controller
{
    //

    public function add(Request $request){
    	$data=array();
    	$error=array();
    	$listcate=Catechild::listallcate();


    

    

    	if($request->isMethod("post")){
    		$data=$request->all();
    		$file=$_FILES['images'];
    		$otherimg=$_FILES['otherimg'];


    		if(empty($data['name'])){
    			$error['name']="Vui lòng nhập tên";
    		}
    		if(empty($file['name'])){
    			$error['images']="Vui lòng nhập file ảnh";
    		}
    		
    		if(empty($error)){
    			$news=new Product;
    			$news->name=$data['name'];
    			$news->cid_catechild=$data['cid_catechild'];
    			$news->status=$data['status'];
    			$news->content=$data['content'];
    			$news->description=$data['description'];
    			$news->save();

    			Data::uploadProduct($file['tmp_name'],"product_".$news->id.".jpg");


    			if(!empty($otherimg['tmp_name'])){
					foreach ($otherimg['tmp_name'] as  $k=>$value) {
						if(is_file($value)){
							Data::uploadProduct($value,"product_".$news->id."_$k.jpg");	
						}
						
					}	
				}

    			return redirect("/admin/product/show")->with("success","Lưu thành công.");
    		}

    	}

    	return View("admin.product.add",['data'=>$data,'error'=>$error,'listcate'=>$listcate]);


    }
    public function show(){
    	//
		$name='';

		if(isset($_GET['name'])){
			$name=$_GET['name'];
		}
        $listcate=Catechild::listall();
		
		$listproduct=Product::whereRaw("name LIKE '%$name%'")->orderBy("id","DESC")->paginate(10);
		return View("admin.product.show",['listproduct'=>$listproduct,'name'=>$name,'listcate'=>$listcate]);
    }

     public function cate($id){
        //
        $name='';
        $sql="b.cid_cate=$id";
        if(isset($_GET['name'])){
            $name=$_GET['name'];
            $sql=$sql." AND a.name LIKE '%$name%'";
        }
        $listcate=Catechild::listall();
        
        

        $listproduct=DB::table("product AS a")
                    ->join("catechild AS b",function($join){
                        $join->on("a.cid_catechild","=","b.id");
                    })
                    ->selectRaw("a.*")
                    ->whereRaw($sql)
                    ->paginate(10);

        return View("admin.product.cate",['listproduct'=>$listproduct,'name'=>$name,'listcate'=>$listcate]);
    }


    public function edit($id,Request $request){
    	$data=array();
    	$error=array();
    	$listcate=Catechild::listallcate();

    	

    	$update=Product::find($id);
    	

    	if(empty($id)){
    		return redirect("/");
    	}
    	if($request->isMethod("post")){
    		$data=$request->all();
    		$file=$_FILES['images'];
    		$otherimg=$_FILES['otherimg'];


    		if(empty($data['name'])){
    			$error['name']="Vui lòng nhập tên";
    		}
    		
    		
    		if(empty($error)){
    			
    			$update->name=$data['name'];
    			$update->cid_catechild=$data['cid_catechild'];
    			$update->status=$data['status'];
    			
    			$update->content=$data['content'];
    			$update->description=$data['description'];
    			$update->save();

    			Data::uploadProduct($file['tmp_name'],"product_".$update->id.".jpg");


    			if(!empty($otherimg['tmp_name'])){
					foreach ($otherimg['tmp_name'] as  $k=>$value) {
						if(is_file($value)){
							Data::uploadProduct($value,"product_".$update->id."_$k.jpg");	
						}
						
					}	
				}

    			return redirect("/admin/product/show")->with("success","Lưu thành công.");
    		}

    	}
    	$data=Product::find($id);
    	return View("admin.product.edit",['data'=>$data,'error'=>$error,'listcate'=>$listcate]);

    }
    public function remove($id){
		Product::find($id)->delete();

		@unlink(PRODUCTS_PATH."/small/product_$id.jpg");
		@unlink(PRODUCTS_PATH."/big/product_$id.jpg");
		return '1';
    }

    public function removeimage(){

		if(isset($_GET['name']) ){
			$name=$_GET['name'];
			@unlink(PRODUCTS_PATH."big/".$name);
			@unlink(PRODUCTS_PATH."small/".$name);
		}
		return '1';
	}
}
