<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    //
    protected $table='cate';

    public static function listall(){
    	$all=Cate::all();
    	$resual=array();
    	foreach ($all as  $value) {
    		$resual[$value->id]=$value->name;
    	}
    	return $resual;


    }
}
