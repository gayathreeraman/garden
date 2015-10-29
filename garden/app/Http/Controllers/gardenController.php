<?php 

namespace App\Http\Controllers;

use Request;
use App\Models\user;
use App\Models\garden;
use App\Models\gardenItem;

class GardenController extends Controller{

	public function viewAll(){
		$gardens = Garden::getAll();
		return view('savedlayout',['gardens' => $gardens]);
	}


	public function view($id){
		$garden = Garden::get($id);
		return view('savedlayout',['garden'=>$garden]);
	}

	public function create(){
		return view('home');

	}

	public function postCreate(){
		$garden = new Garden();
		$garden->layout_name = Request::input('title');
		return redirect('home');
		


		
	}

	public function getSavedLayout(){


	}
	
}