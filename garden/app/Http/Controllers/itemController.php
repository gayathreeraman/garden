<?php 

namespace App\Http\Controllers;

use Request;
use App\Models\Item;

class ItemController extends Controller
{			
	//getting the method from Model(getByCategory)
	public function getByCategory($category){
		//print_r($category);
		$items = Item::getItemsByCategory($category);
		//Encode the items object containing information and return data as a json string
		// $json = json_encode($items);
		//Return the json string to the client
		// echo $json;
		
		return $items;

		
	}


}