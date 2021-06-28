<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\custom_post;
use App\post;
use App\categorie;
use App\posttag;
use App\testimonial;

class PagesController extends Controller
{
    public function index(){
		
		$latestPost = post::orderBy('created_at', 'desc')->take(3)->get();
		$testimonial = testimonial::orderBy('created_at', 'desc')->get();
		$love_to_meet = custom_post::where('slug', 'love-to-meet-you' )->orderBy('created_at', 'desc')->take(1)->get();
		$updatepost = array('updatepost' => $latestPost, 'testimonial'=>$testimonial, 'love_to_meet'=>$love_to_meet);		
		return view('login')->with($updatepost);
		//return $latestPost[0]->created_at;
	} 
	public function about(){
		return view('about');
	}
	public function mortgageGuide(){
		return view('mortgage-guide');
	}	
	public function mortgageCalculators(){
		return view('mortgageCalculators');
		
	}
	public function buyerMortgageCalculators(){
		return view('buyerMortgageCalculators');
	}
	public function mortgageCalculatorsDetail(){
		$first_time_buyers = custom_post::where('slug', 'first-time-buyers' )->orderBy('created_at', 'desc')->take(1)->get();
		$first_time_buyers = array('first_time_buyers' => $first_time_buyers);
		return view('mortgageCalculatorsDetail')->with($first_time_buyers);
	}
	public function lifeInsurance(){
		return view('lifeInsurance');
	}
	public function ourValues(){
		return view('ourValues');
	}
	public function conveyancing(){
		return view('conveyancing');
	}
	public function bestGuysBuyer(){
		return view('bestGuysBuyer');
	}
	public function news(){
		$latestPost = post::orderBy('created_at', 'desc')->paginate(3);
		$allpost = array('allpost' => $latestPost);
		return view('news')->with($allpost);
		//return $latestPost;
	}
	public function awards(){
		$awards_data = custom_post::where('slug', 'awards-data' )->orderBy('created_at', 'desc')->paginate(8);
		$awards_data = array('awards_data' => $awards_data);
		
		return view('awards')->with($awards_data);
	}
	public function career(){
		return view('career');
	}
	public function contact(){
		return view('contact');
	}
	public function firstTimeBuyer(){
		return view('firstTimeBuyer');
	}
	public function customerReviews(){
		return view('customerReviews');
	}
	public function newsDetail(){
		return view('newsDetail');
	}
	// public function admin(){
		// return view('admin');
	// }
	
}
