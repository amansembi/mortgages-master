<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\custom_post;

class customfieldController extends Controller
{
    public function index()
	{
		return view('admin/customfields/customField');
	}
	
	public function store(Request $request)
	{
		$customval = array();
		$this->validation($request);
		$customPost = new custom_post;
		//$customPost::query()->truncate();
		$customval = $customPost::all();
			$res =$customPost::where('slug','love-to-meet-you')->delete();

			 
				if($file=$request->file('image1'))
					{			
							
								$name = rand().'.'.$file->getClientOriginalExtension();				
								$destinationPath = public_path('/images/customposts');
								$file->move($destinationPath, $name);
								$images1 = '/public/images/customposts/'.$name;					
						
					}	
				if($file=$request->file('image2'))
					{			
							
								$name = rand().'.'.$file->getClientOriginalExtension();				
								$destinationPath = public_path('/images/customposts');
								$file->move($destinationPath, $name);
								$images2 = '/public/images/customposts/'.$name;					
						
					}	
				if($file=$request->file('image3'))
					{			
							
								$name = rand().'.'.$file->getClientOriginalExtension();				
								$destinationPath = public_path('/images/customposts');
								$file->move($destinationPath, $name);
								$images3 = '/public/images/customposts/'.$name;					
						
					}
		$customPost->title = $request->title;
		$customPost->description = $request->description;
		$customPost->slug = 'love-to-meet-you';
		//$customPost->postimage = json_encode($images);
		$customPost->image1 = $images1;
		$customPost->image2 = $images2;
		$customPost->image3 = $images3;
		$customPost->save();		
		$request->session()->flash('custompostres','Added custom post successfully');
		return redirect(url('admin/addCustomField'));	
		
	}
	
	public function firstTimeBuyers()
	{
		return view('admin/customfields/firstTimeBuyers');
	}
	
		public function firstTimeBuyersPost(Request $request)
	{
		$customval = array();
		$this->validation($request);
		$customPost = new custom_post;
		//$customPost::query()->truncate();
		$customval = $customPost::all();
			$customPost::where('slug','first-time-buyers')->delete();			 
				if($file=$request->file('images'))
					{										
						$name = rand().'.'.$file->getClientOriginalExtension();				
						$destinationPath = public_path('/images/customposts');
						$file->move($destinationPath, $name);
						$images = '/public/images/customposts/'.$name;												
					}
		$customPost->title = $request->title;
		$customPost->description = $request->description;
		$customPost->slug = 'first-time-buyers';
		$customPost->image1 = $images;
		$customPost->save();		
		$request->session()->flash('firstTimeBuyersPost','Added custom post successfully');
		return redirect(url('admin/firstTimeBuyers'));	
		//return $request;
	}
	
	public function awards()
	{
		return view('admin/customfields/award');
	}
	public function awardstore(Request $request)
	{
		$this->validationaward($request);
		$awardpost = new custom_post;
		$awardpost->title = $request->awardtitle;
		$awardpost->slug = 'awards-data';
		$awardpost->description = $request->awarddescription;
		if($file=$request->file('awardimage'))
					{										
						$name = time().'.'.$file->getClientOriginalExtension();				
						$destinationPath = public_path('/images/customposts');
						$file->move($destinationPath, $name);
						$images = '/public/images/customposts/'.$name;												
					}
		$awardpost->postimage = $images;
		$awardpost->awardyear = $request->awardyear;
		$awardpost->save();		
		$request->session()->flash('awardValue','Added award successfully');
		return redirect(route('awards'));	
	}
	
	public function validation($request)
    {
    	return $this->validate($request, [
    		'title' => 'required|max:255',    			
    		'description' => 'required|max:5555',
    		//'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',		
    	]);
    }
	//validation for award
	public function validationaward($request)
    {
    	return $this->validate($request, [
    		'awardtitle' => 'required|max:255',    			
    		'awardyear' => 'required|max:255',    			
    		'awarddescription' => 'required|max:5555',
    		//'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',		
    	]);
    }
}
