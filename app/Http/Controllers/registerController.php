<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use App\User;
use Auth;
class registerController extends Controller
{
	public function __construct(UrlGenerator $url)
	{
		$this->url = $url;
	}
	public function register()
	{
		return view('layouts/register');
	}
	public function submitregister(Request $req)
	{		
		$this->validation($req);
		$user = new user();
		$user->name = $req->input('name');
		$user->lname = $req->input('lname');
		$user->email = $req->input('email');
		$user->password = bcrypt($req->input('password'));
		if ($req->hasfile('image')) {			
			$image = $req->file('image');
			$name = time().'.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/images');
			$image->move($destinationPath, $name);
			$imageurl = '/public/images/'.$name;
			$user->image = $imageurl;		   
		}
		$user->save();    
		//User::create($req->all());
		return redirect('/')->with('Status','You are registed');
	}
	public function validation($req)
	{
		return $this->validate($req, [
			'name' => 'required|max:255',
			'lname' => 'required|max:255',
			'email' => 'required|email|unique:users|max:255',
			'password' => 'required|confirmed|max:255',
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6048',		
		]);
	}
	
	// login form controllers********************************************************
	
	public function loginForm()
	{
		return view('layouts/login');
	}
	public function submitlogin(Request $req)
	{
		$this->validate($req, [	
			'email' => 'required|email|max:255',
			'password' => 'required|max:255',	   
		]);
		if(Auth::attempt(['email'=>$req->email, 'password'=>$req->password])){
			return redirect('admin');
		}
		return 'oooppps somthing wrong';
		
	}
	
}
