<?php
namespace App\Models;
use DB;
use App\Models\garden;
use App\Models\item;



class GardenItem {

	public static function insert($garden_id,$item_id,$coordinate_x,$coordinate_y){
		echo("i am one");
		$sql="INSERT INTO garden_item (garden_id,item_id,coordinate_x,coordinate_y) values(:garden_id,:item_id,:coordinate_x,:coordinate_y)";
		DB::insert($sql,['garden_id'=>$garden_id,'item_id'=>$item_id,'coordinate_x'=>$coordinate_x,'coordinate_y'=>$coordinate_y]);

	}




}