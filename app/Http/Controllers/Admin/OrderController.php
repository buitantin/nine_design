<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order;
use App\Catechild;

class OrderController extends Controller
{
    
	public function show(){
		$listcate=Catechild::listall();
		$search='';
		if(isset($_GET['search'])){
			$list=Order::whereRaw("cid_catechild={$_GET['search']}")->paginate(10);
		}else{
			$list=Order::paginate(10);	
		}

		

		return View("admin.order.show",['list'=>$list,'listcate'=>$listcate,'search'=>$search]);
	}
	public function view($id){

	}
	public function remove($id){
		return Order::whereRaw("id=$id")->delete();

	}
}	
