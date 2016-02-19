<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;

class PageController extends Controller
{
    //
    public function add(Request $request){
    	$data=array();
    	$error=array();
    	if($request->isMethod("post")){
    		$data=$request->all();



    	}
    	return View("admin.page.add",['data'=>$data,"error"=>$error]);
    }
    public function show(){
    	return View("admin.page.show");
    }
    public function remove($id){
    	return Page::find($id)->delete();
    }
    public function edit($id){
    	return View("admin.page.edit");
    }
}
