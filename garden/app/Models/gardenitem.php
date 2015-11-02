<?php
namespace App\Models;
use DB;
use App\Models\garden;
use App\Models\item;



class GardenItem {

	public static function insert($garden_id,$item_id,$coordinate_x,$coordinate_y){
		
		$sql="INSERT INTO garden_item (garden_id,item_id,coordinate_x,coordinate_y) values(:garden_id,:item_id,:coordinate_x,:coordinate_y)";
		DB::insert($sql,['garden_id'=>$garden_id,'item_id'=>$item_id,'coordinate_x'=>$coordinate_x,'coordinate_y'=>$coordinate_y]);

	}

	public static function get($garden_id){

		$sql = "SELECT * FROM garden_item where garden_id = :garden_id";
		$row = DB::select($sql,[':garden_id'=> $garden_id]);
		$gadenitems = [];
		foreach($rows as $row){
			$gardenitem = new GardenItem($garden_id->garden_id);
			$gardenitem->garden_id = $row->garden_id;
			$gardenitem->item_id=$row->item_id;
			$gardenitem->coordinate_x = $row->coordinate_x;
			$gardenitem->coordinate_y = $row->coordinate_y ;

			$gardenitems[] = $gardenitem;
		}

		return $gardenitems;
		
	}


}