<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;

class BlogController extends Controller
{
    //
    public function show(){
    	$list=Blog::orderBy("id","DESC")->paginate(6);

    	return View("default.blog.show",['list'=>$list]);
    }
    public function detail($id){

    	$detail=Blog::find($id);
    	$list=Blog::orderBy("id","DESC")->limit(10)->get();

    	return View("default.blog.detail",['list'=>$list,'detail'=>$detail]);
    }
}
