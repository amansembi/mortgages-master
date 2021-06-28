<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\contact;

class contactController extends Controller
{
    public function index(Request $request)
	{
		
		$this->validation($request);
		$contact = new contact;
		$contact->name = $request->name;
		$contact->time = $request->timeval;
		$contact->date = $request->dateval;		
		$page = $request->page;			
		$req = $contact->save();	
			
			if($req){
				echo "Contact added successfully   ";	
			}else{
				echo "Contact not added";
			}
			
		
	}
	public function validation($request)
    {
    	return $this->validate($request, [
    		'name' => 'required|max:255',
    		'timeval' => 'required|max:255',		
    		'dateval' => 'required|max:255',    				
    	]);
    }
}
