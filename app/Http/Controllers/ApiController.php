<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
use App\General;
use App\Slide;
use App\Blog;
use App\Page;
use App\Cate;
use App\Contact;
use App\Banner;


use Response;
class ApiController extends Controller
{
    //

    public function product(Request $request){

    	

    }
    public function general(){
    	$data=General::find(1);
    	return Response::json($data);
    }
    public function banner(Request $request){

        if($id=$request->get("id")){
            return Banner::find($id)->toJson();    
        }
        
    }
    public function slideshow(){
    	$data=Slide::orderBy("id","DESC")->limit(4)->get();
    	return Response::json($data);
    }
    public function cate(){
        $data=Cate::orderBy("id","ASC")->get();
        return Response::json($data);
    }
}
