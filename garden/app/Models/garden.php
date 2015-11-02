<?php
namespace App\Models;
use DB;

class Garden {
	protected static $table ="garden" ;

	public $layout_name;

	public static function getAll($user_id){
		
		$sql = " SELECT * FROM garden where user_id = :user_id";
		$rows = DB::select($sql, ["user_id"=>$user_id]);
		$gardens =[];
		foreach($rows as $row){
			$garden =new Garden();
			$garden->garden_id = $row->garden_id;
			$garden->layout_name = $row->layout_name;
			$garden->date_created = $row->date_created;
			$gardens[] = $row;
		}

		 //print_r($gardens);
		return $gardens;
	}


	public static function get($garden_id){

		$sql = "SELECT * FROM garden where garden_id = :garden_id";
		$row = DB::selectOne($sql,[':garden_id'=> $garden_id]);

		$garden = new Garden();
		$garden->layout_name = $row->layout_name;
		$garden->garden_id = $row->garden_id;
		$garden->user_id = $row->user_id;
		$garden->date_created = $row->date_created;

		
		return $garden;
	}
	

		
	 public function save(){
	 	if(empty($this->garden_id)){
	 		$this->insert();
			
	 	} else {
			$this->update();
	 	}
	 }

 	private function insert(){

 		$sql="INSERT INTO garden(user_id,layout_name)values
 		 (:user_id ,:layout_name)";
 		DB::insert($sql,['user_id'=> $this->user_id,'layout_name'=>$this->layout_name]);

 		$this->garden_id = DB::getPdo()->lastInsertId();
 		


 	}



 	private function update(){
 		//dd($this);
 		$sql = "UPDATE garden set user_id = :user_id,layout_name = :layout_name where garden_id =:garden_id";
 		DB::insert($sql,['user_id' => $this->user_id,'layout_name'=>$this->layout_name,'garden_id'=>$this->garden_id]);
 	}


	public function deleteAllItems(){
		$sql="DELETE from garden_item where garden_id = :garden_id";
		DB::delete($sql,['garden_id'=> $this->garden_id]);
	}


 	public static function delete($garden_id){
 	$sql = "DELETE from garden where garden_id = :garden_id";
         DB::delete($sql,[':garden_id'=> $garden_id]);   
 	}


	
	

}
 

