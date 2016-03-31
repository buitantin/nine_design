<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;
use App\Contact;

class PageController extends Controller
{
    //
    public function info(){
    	$data=Page::find(1);
    	return View("default.page.index",['data'=>$data]);
    }
      public function lear(){
    	$data=Page::find(2);
    	return View("default.page.index",['data'=>$data]);
    }
    public function submitcontact(Request $request){
    	$data=array();
    	$error=array();
    	if($request->isMethod("post")){

             $code = $request->get('contactCaptchaCode');
            $isContact = captcha_validate($code);
            if($isContact==false){
                $error["contactCaptchaCode"]="Vui lòng nhập đúng Captcha";
            }

    		$data=$request->all();
    		if(empty($data['contactname'])){
    			$error['contactname']="Vui lòng nhập họ và tên";
    		}
    		if(empty($data['contactemail'])){
    			$error['contactemail']="Vui lòng nhập E-mail";
    		}
    		if(empty($data['contactsubject'])){
    			$error['contactsubject']="Vui lòng nhập chủ đề";
    		}
    		if(empty($data['contactcontent'])){
    			$error['contactcontent']="Vui lòng nhập nội dung";

    		}
         
    		if(empty($error)){
                
    			    
    				$new=new Contact;
    				$new->name=$data['contactname'];
    				$new->email=$data['contactemail'];
    				$new->subject=$data['contactsubject'];
    				$new->content=$data['contactcontent'];
    				$new->save();
                     $data=array();
                    $data['contactsuccess']="Cảm ơn bạn đã liên hệ đến chúng tôi. Chúng tôi sẽ liên lạc đến bạn sớm nhất.";

    		}
    	}
    	return View("default.page.submitcontact",['error'=>$error,'data'=>$data]);
    }
}
