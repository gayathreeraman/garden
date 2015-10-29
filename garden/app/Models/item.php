<?php
namespace App\Models;
use DB;
class Item  {
	protected static $table ="item" ;


	public static function getItemsByCategory($category){
	
		$items = DB::select("SELECT * from item where category = :category" ,["category"=>$category]);
		 // print_r($items);
		return $items;
	}


// public function itemAdd(){

// 	DB::INSERT('INSERT into item where id=:id',["id"=>$id]);
// }


// public function itemDelete(){

// 	DB::delete('delete from item where id=:id',["id"=>$id]);
// }





}