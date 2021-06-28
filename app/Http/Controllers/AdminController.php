<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Auth;
class AdminController extends Controller
{
	
    public function _construct(){
		$this->middleware('auth');
	}
    public function admin(){
		return view('admin');
	}
	
	// public function postpublish(Request $request){
		//return view('admin/post/post');
		//echo "asdklsadj";
		// print_r($request->all());
	// }	
	// public function postCategory(){
		// return view('admin/post/category');
	// }

	public function allPost(){
		return view('admin/post/allpost');
	}


}
