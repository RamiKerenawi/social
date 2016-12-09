<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


use App\Http\Requests;

class ArtcleController extends Controller
{
    public function index()
		{
			
		 $users = DB::table('users')->get();
		return view("articles.index",compact("users"));


		}
}
