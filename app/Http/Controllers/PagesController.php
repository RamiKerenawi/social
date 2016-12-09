<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
	
	
	public function about() {
		
		$name="Rami Kerenawi";
		$people = [];
		
		$people=[
		
		"Ahmed","Mohammed","Ali"
		];
		$data = [];
		$data = [
			'first' =>"Rami" ,
			'last' => "Lerenawi"
		];
		//return view("pages.about")->with($data);
		return view("pages.about",compact('people'));
	}
}
