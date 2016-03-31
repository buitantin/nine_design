<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
class ContactController extends Controller
{
    //
    public function show(){
    	$pagi=Contact::orderBy("id","DESC")->paginate(10);
    	return View("admin.contact.show",['list'=>$pagi]);
    }
    public function remove($id){
    	return Contact::find($id)->delete();
    }
}
