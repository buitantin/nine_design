<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;
use App\Library\Data;

class BlogController extends Controller
{
    //

    public function add(Request $request){
    	$error=array();
    	$data=array();
    	if($request->isMethod("post")){
    		$data=$request->all();
    		$file=$_FILES['images'];
    		if(empty($data['name'])){
    			$error['name']="Vui lòng nhập tên";
    		}
    		if(empty($file['name'])){
    			$error['images']="Vui lòng chọn hình ảnh";
    		}
    		if(empty($error)){
    			$news=new Blog;
    			$news->name=$data['name'];
    			$news->status=$data['status'];

                $news->is_home=$data['is_home'];

    			$news->description=$data['description'];
    			$news->content=$data['content'];
    			$news->save();


    			Data::uploadBlog($file['tmp_name'],"blog_".$news->id.".jpg");
    			return redirect("/admin/blog/show")->with("success","Lưu thành công.");
    		}
    	}
    	return View("admin.blog.add",['data'=>$data,'error'=>$error]);
    }
    public function show(){
    		$name='';

		if(isset($_GET['name'])){
			$name=$_GET['name'];
		}

		
		$listproduct=Blog::orderBy("id","DESC")->paginate(10);
		return View("admin.blog.show",['listproduct'=>$listproduct,'name'=>$name]);
    }
    public function edit($id,Request $request){
    	$error=array();
    	$data=array();


    	if($request->isMethod("post")){

    		$data=$request->all();
    		$file=$_FILES['images'];
    		if(empty($data['name'])){
    			$error['name']="Vui lòng nhập tên";
    		}
    		
    		if(empty($error)){
    			$upldate=BLog::find($id);
    			$upldate->name=$data['name'];
    			$upldate->status=$data['status'];
                $upldate->is_home=$data['is_home'];

    			$upldate->description=$data['description'];
    			$upldate->content=$data['content'];
    			$upldate->save();

    			if(!empty($file['name'])){
		    		Data::uploadBlog($file['tmp_name'],"blog_".$upldate->id.".jpg");
		    	}
    			
    			return redirect("/admin/blog/show")->with("success","Lưu thành công.");
    		}
    	}
    	$data=BLog::find($id);
    	return View("admin.blog.edit",['data'=>$data,'error'=>$error]);


    }
    public function remove($id){
    	$a=Blog::find($id)->delete();
    	@unlink(BLOG_PATH."big/blog_$id.jpg");
    	@unlink(BLOG_PATH."small/blog_$id.jpg");
    	return '';
    }

}
