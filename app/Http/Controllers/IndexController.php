<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cate;
use App\Blog;

class IndexController extends Controller
{
    //home
    public function index(){

        $categories=Cate::all();
        $blog=Blog::whereRaw("status='0' AND is_home='0'") -> orderBy("id","DESC")->get();
    	return View("default.home.index",['categories'=>$categories,'listblog'=>$blog]);
    }

    
    public function cate(){

    }




    //page
    public function info(){

    }
    public function learn(){

    }



}
