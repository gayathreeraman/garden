<?php
namespace App\Models;
use DB;
use App\Models\garden;
use App\Models\item;

class Garden {
	protected static $table ="gardenitem" ;
	public static function createGarden($garden_id,$item_id,coordinate_x,coordinate_y){
		//todo: get user_id for user_name
		$sql="INSERT INTO garden(garden_id,item_id,coordinate_x,coordinate_y)values(:garden_id,:item_id,:coordinate_x,:coordinate_y)";
		DB::insert($sql,['garden_id'=>garden_id,'item_id'=>item_id',''coordinate_x'=>coordinate_x,'coordinate_y'=>coordinate_y]);

	}



}