<?php
namespace App\Models;
use DB;

class Garden {
	protected static $table ="garden" ;

	public static function createGarden($username,$layout_name){
		//todo: get user_id for user_name
		$sql="INSERT INTO garden(user_id,layout_name)values(:user_id,:layout_name)";
		DB::insert($sql,['user_id'=>user_id,'layout_name'=>layout_name]);

	}

	// check if this is right

// check if this is right
// public static function gardenItem(coordinate_x,coordinate_y){
// 	$sql="INSERT INTO garden_item(coordinate_x,coordinate_y)values (:coordinate_x,:coordinate_y)";

// 	DB::insert($sql,['coordinate_x'=>$coordinate_x,'coordinate_y'=>$coordinate_y]);
// }


// public static function addItem(coordinate_x,coordinate_y){
// 	$sql="INSERT INTO garden_item(coordinate_x,coordinate_y)values (:coordinate_x,:coordinate_y)";

// 	DB::insert($sql,['coordinate_x'=>$coordinate_x,'coordinate_y'=>$coordinate_y]);
// }
}
 

