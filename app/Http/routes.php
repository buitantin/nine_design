<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

//Admin


Route::group(["middleware"=>['web']],function(){
	Route::any("/admin/users/login","Admin\UsersController@login");
	Route::get("/admin/user/logout","Admin\UsersController@logout");
});

Route::group(['namespace'=>'Admin','prefix'=>"admin",'middleware'=>'auth'],function(){

	Route::any("/user/password","UsersController@password");

	Route::group(['prefix'=>"general"],function(){
		Route::any("/add","GeneralController@add");
	});
	Route::group(['prefix'=>'product'],function(){
		Route::any("/add/","ProductController@add");
		Route::get("/show","ProductController@show");
		Route::get("/cate/{id}","ProductController@cate");
		Route::any("/edit/{id}","ProductController@edit");
		Route::get("/remove/{id}","ProductController@remove");
		Route::get("/removeimage","ProductController@removeimage");

		
	});

	Route::group(['prefix'=>"blog"],function(){
		Route::any("/add","BlogController@add");
		Route::get("/show","BlogController@show");
		Route::any("/edit/{id}","BlogController@edit");
		Route::get("/remove/{id}","BlogController@remove");
	});

	Route::group(['prefix'=>"contact"],function(){
		Route::get("/show","ContactController@show");
		Route::get("/remove/{id}","ContactController@remove");
	});

	Route::group(['prefix'=>"slideshow"],function(){
		Route::any("/add","SlideController@add");
		Route::get("/show","SlideController@show");
		Route::any("/edit/{id}","SlideController@edit");
		Route::get("/remove/{id}","SlideController@remove");
	});

	Route::group(['prefix'=>'page'],function(){
		Route::any("/add/{id}","PageController@add");

	});
	Route::group(['prefix'=>'cate'],function(){
		Route::any("/edit/{id}","CateController@edit");
		Route::get("/show","CateController@show");
	});
	Route::group(['prefix'=>'catechild'],function(){
		Route::any("/edit/{id}","CatechildController@edit");
		Route::any("/add","CatechildController@add");

		Route::get("/show","CatechildController@show");

		Route::get("/cate/{id}","CatechildController@cate");


		Route::get("/remove/{id}","CatechildController@remove");
	});

	Route::group(['prefix'=>'banner'],function(){
		Route::any("/edit/{id}","BannerController@edit");
		Route::any("/add","BannerController@add");

		Route::get("/show","BannerController@show");
		Route::get("/remove/{id}","BannerController@remove");
	});
	Route::group(['prefix'=>'order'],function(){
		
		Route::any("/view/{id}","OrderController@view");

		Route::get("/show","OrderController@show");
		Route::get("/remove/{id}","OrderController@remove");
	});


});
// API
Route::group(['middleware'=>['web'],'prefix'=>'api'],function(){
	Route::post("/general","ApiController@general");
	Route::post("/slideshow","ApiController@slideshow");
	Route::post("/cate","ApiController@cate");
	Route::post("/catechild","ApiController@catechild");
	Route::post("/banner","ApiController@banner");
});
// Route::group(['middleware' => 'web'], function () {
//     Route::auth();

//     Route::get('/home', 'HomeController@index');
// });

Route::group(['middleware'=>'web'],function(){


	Route::get("/","IndexController@index");

	Route::get("/gioi-thieu",['as'=>'info','uses'=>"PageController@info"] );
	Route::get("/day-va-hoc",['as'=>'lear','uses'=>"PageController@lear"] );
	Route::post("/submitcontact","PageController@submitcontact");

	Route::get("/blog",['as'=>'blog','uses' => "BlogController@show" ] );
	Route::get("/chi-tiet-bai-viet/{id}/{alias}",['as'=>'detailblog','uses'=>"BlogController@detail" ] );


	Route::get("/trang-{alias}",['as'=>'cate','uses'=>"ProductController@cate"] );
	Route::get("/danh-muc-{id}-{alias}",['as'=>'catechild','uses'=>"ProductController@catechild"] );
	Route::get("/chi-tiet/{id}_{alias}",['as'=>'detail','uses'=>"ProductController@detail"]);
});




