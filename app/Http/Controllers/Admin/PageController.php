<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;

class PageController extends Controller
{
    //
    public function add($id,Request $request){
    	$data=array();
    	$error=array();


    	if($request->isMethod("post")){
    		$data=$request->all();
            if(empty($data['name'])){
                $error['name']="Vui lòng nhập tên trang";
            }
            if(empty($error)){
                $updated=Page::findOrNew($id);
                $updated->name=$data['name'];
                $updated->content=$data['content'];
                $updated->save();
                return redirect()->back()->with("success","Cập nhật thành công");
            }

            
    	}

        $data=Page::find($id);

    	return View("admin.page.edit",['data'=>$data,"error"=>$error]);
    }
  
}
