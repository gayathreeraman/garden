<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\item;
use App\Models\garden;
use App\Models\gardenItem;

class GardenController extends Controller{

	public function home(Request $request){

		$garden = new Garden();
		
		return view ('home', ['garden' => $garden, 'items' => []]);
	}

	public function viewAll(Request $request){
		//request is used to get the current user id.

		$user = $request->user();

		  // print_r($user->id);

		 $gardens = Garden::getAll($user->id);


		 return view('savedlayout',['gardens' => $gardens]);
	}


	public function view($garden_id){
		
		$garden = Garden::get($garden_id);
		$items = Item::getGardenItems($garden_id);
		if($garden === null){

			return view('error');
		}else
		{ 
			return view('home',['garden'=>$garden,'items'=>$items]);
		}

		
	}


	

	 public function saveTitle(Request $request){

	 	//if we have an inout id- the garden already exist

		$layout_name = trim($request->input('gardenName'));
		$garden_id = $request->input('garden_id');

		// echo $layout_name;
		$user = $request->user();
	 	if($user == null){
	 		return response()->json(["message"=>"No User"], 401); 
	 	}
	 	if($layout_name == null || $layout_name == ""){
	 		return response()->json(["message"=>"No Title"], 401); 
	 	}
	 	

 		if($garden_id > 0){
 			$garden = Garden::get($garden_id);
 		} else{
		 	$garden = new Garden();
	 		$garden->user_id = $user->id;
 		}



		$garden->layout_name= $request->input('gardenName');

		
		$garden->save();
		$garden->deleteAllItems();
		//Need to delete any existing items
		return response()->json(["message"=>"Good job", "gardenId"=>$garden->garden_id], 200);

	}



	//i don't have to create a new garden since it is already creataed
	//
	 public function saveitem(Request $request){
		// make sure you add the same variable that you have added in ajax.
	 	$garden_id = $request->input('garden_id');
	 	$item_id = $request->input('item_id');
	 	$x = $request->input('x');
	 	$y = $request->input('y');

	 	//after giving all variables- now connect it with the model 

	 	$gardenitem =GardenItem::insert($garden_id,$item_id,$x,$y);
	 	return $garden_id; 
	 }



	 public static function delete($garden_id) {
		Garden::delete($garden_id);

		return redirect("/garden");
		
	}


	 

	

	
}