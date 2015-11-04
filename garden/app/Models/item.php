<?php
namespace App\Models;
use DB;
class Item  {
	protected static $table ="item" ;
	public $category;


	public static function getItemsByCategory($category){

		$sql= "SELECT * from item where category = :x";
	
		$items = DB::select($sql ,["x"=>$category]);
		return $items;
	}

	public static function getGardenItems($garden_id){

		$sql = "SELECT item.category,item.image_file_path,item.display_image_name,item.item_id,item.img_css_class,garden_item.coordinate_x,garden_item.coordinate_y
		 FROM item,garden_item,garden 
		 WHERE item.item_id = garden_item.item_id and
		 garden.garden_id = garden_item.garden_id and
		 garden_item.garden_id = :garden_id";

		$items = DB::select($sql,["garden_id"=>$garden_id]);
		return $items;
	}





}