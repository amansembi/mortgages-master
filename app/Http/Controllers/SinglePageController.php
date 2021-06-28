<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\post;
use App\categorie;
class SinglePageController extends Controller
{
   public function index($id)
   {	   
	   $fullpost = post::find($id);
		if(!empty($fullpost)){
	   $categorie = new categorie;
	   $allcat = $categorie::all();
	   return view('/single', ['fullpostdata' => $fullpost, 'allcat' =>$allcat]);	 
		}else{
			return "Opps!! In this category no post exit";
		}
   }
}
