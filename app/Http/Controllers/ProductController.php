<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cate;
use App\Catechild;
use App\Product;
use DB;

class ProductController extends Controller
{
    //
    public function cate($alias){
    	if(!empty($alias)){
    		$cate=Cate::whereRaw("alias='$alias'")->first();	
    		if(!empty($cate)){
    			$catechild=Catechild::whereRaw("cid_cate=".$cate->id)->get();

    			$product=array();

                foreach ($catechild as $child) {
                        $product[$child->id]=Product::whereRaw("cid_catechild={$child->id}")->orderBy("id","DESC")->limit(4)->get();
                }

    			return View("default.product.cate",['cate'=>$cate,'catechild'=>$catechild,'product'=>$product]);	
    		}
    		
    	}
    	return redirect('/?e');
    	

    	
    }
    public function catechild($id,$alias){
            $child=Catechild::find($id);
            $cate=Cate::find($child->cid_cate);
            $product=Product::whereRaw("cid_catechild=$id")->orderBy("id","DESC")->paginate(8);

            return View("default.product.catechild",['product'=>$product,'cate'=>$cate,"child"=>$child]);
    }
    public function detail($id,$alias){
        $product=Product::find($id);
        return View("default.product.default",['product'=>$product]);
    }
}
