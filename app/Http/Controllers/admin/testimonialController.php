<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\testimonial;

class testimonialController extends Controller
{
    public function index()
	{
		$alltestimonial = new testimonial;
		$testimonial = $alltestimonial::all();
		$alltestimonials = array('alltestimonials' => $testimonial);
		return view('admin/testimonials/alltestimonials')->with($alltestimonials);
		//return $alltestimonials;
	} 
	
	public function newtestimonial()
	{
		return view('admin/testimonials/newtestimonial');
	}
	public function deletetestimonial($id)
	{
		$deletepost = testimonial::find($id);
		// $trail = new Trail($editpost);
		// $trail->save();
    	$deletepost->delete();
    	session()->flash('deletetestimonial','Row Deleted Successfully');
		return redirect(route('alltestimonial'));
	}

	public function store(Request $request)
	{
		$this->validation($request);
		$testimonial = new testimonial;
		$testimonial->fullname = $request->fullname;
		 $testimonial->email = $request->email;
		$testimonial->companyName = $request->companyName;
		$testimonial->companyWebsite = $request->companyWebsite;
		$testimonial->heading = $request->heading;
		$testimonial->testimonial = $request->testimonial;
		if ($request->hasfile('image')) {			
    		$image = $request->file('image');
    		$name = time().'.'.$image->getClientOriginalExtension();
    		$destinationPath = public_path('/images/testimonial');
    		$image->move($destinationPath, $name);
    		$imageurl = '/public/images/testimonial/'.$name;
    		$testimonial->image = $imageurl;		   
    	}
		$testimonial->save();
		$request->session()->flash('testimonial','Testimonial published successfully');
    	return redirect(route('newtestimonial'));
    	//return $request;
	}
	
	public function validation($request)
    {
    	return $this->validate($request, [
    		'fullname' => 'required|max:255',
    		//'email' => 'required|email|unique:testimonial|max:255',
    		'companyName' => 'required|max:255',		
    		'companyWebsite' => 'required|max:255',
    		'heading' => 'required|max:255',
    		'testimonial' => 'required|max:5555',
    		'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',		
    	]);
    }


}
