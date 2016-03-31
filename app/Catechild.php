<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catechild extends Model
{
    //
    protected $table='catechild';


    public static function listall(){
    	$all=Catechild::all();
    	$resual=array();
    	foreach ($all as  $value) {
    		$resual[$value->id]=$value->name;
    	}
    	return $resual;


    }
     public static function listallcate(){
        
        $resual=array();

        $cate=Cate::all();

        foreach ($cate as  $c) {
            $t=array();

            $child=Catechild::whereRaw("cid_cate=".$c->id)->get();
            foreach ($child as $mc) {
                $t[$mc->id]=$mc->name;
            }
             $resual[$c->name]=$t;
        }
        return $resual;


    }

    
}
