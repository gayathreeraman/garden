<?php
namespace App\Models;
use DB;

class Garden {
	protected static $table ="garden" ;

	public static function getAll(){
		
		$sql = " SELECT * FROM garden";
		$rows = DB::select($sql);
		$gardens =[];
		foreach($rows as $row){
			$garden =new Garden();
			$garden->garden_id = $row->garden_id;
			$garden->layout_name = $row ->layout_name;
			$garden->date_created = $row ->date_created;
			$gardens[] = $garden;
		}
		return $gardens;
	}


	public static function get($id){

		$sql = "SELECT * FROM garden where id = :id";
		$row = DB::selectOne($sql,[':id'=> $id]);

		$garden = new Garden();
		$garden->id = $row ['id'];
		$garden->layout_name = $row ['layout_name'];
		$garden->date_created = $row['date_created'];
		return $garden;
	}
	


	
public function save(){
		if(empty($this->id)){
			$this->insert();
		
	} else {
		$this->update();
	}
}



	public static function insert(){
		//todo: get user_id for user_name
		$sql="INSERT INTO garden(user_id,layout_name)values(:user_id,:layout_name)";
		DB::insert($sql,['user_id'=>$user_id,'layout_name'=>$layout_name]);

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
 

