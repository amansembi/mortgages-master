<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Http\Request;
use App\categorie;
use Auth;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$category = new categorie;
		$allcat = $category::all();
		 //return $allcat;
        return view('admin/post/category', [	'allCategory'=>$allcat	] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
		'cattitle' => 'required|max:255',		
		//'slug' => 'required|max:255',		
		//'catimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',		
	]);
		$categorie = new categorie;
		$categorie->cattitle = $request->cattitle;		
		$categorie->subcattitle = '0';		
		$categorie->slug = $request->slug;
		if ($request->hasfile('catimage')) {			
					$image = $request->file('catimage');
					$name = time().'.'.$image->getClientOriginalExtension();
					$destinationPath = public_path('/images/categorie');
					$image->move($destinationPath, $name);
					$imageurl = '/public/images/categorie/'.$name;
					$categorie->catimage = $imageurl;		   
			}
			$duplicateCat = $categorie::where('cattitle', $request->cattitle )->first();
			if (!empty($duplicateCat)) 
					{
						$request->session()->flash('data','Category already exist');
						return redirect(route('admin/postCategory'));
					} 
			else
					{
						$categorie->save();
						$request->session()->flash('data','Category Published successfully');
						return redirect(route('admin/postCategory'));
					}			 
			}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin/post/editCategory');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
    }   
	
	public function newcat(Request $request)
    {
		$categorie = new categorie;
		//$editpost = post::find($postid);
        $new_cat_value = $request->new_cat_value;
        $parentcatvalue = trim($request->parentcatvalue);
		$parentCat = $categorie::where('cattitle', trim($request->parentcatvalue) )->first();		
			//echo $parentcatvalue;
		if($parentcatvalue !== '-Parent categories-' ){
			$editpost = categorie::find($parentCat->id);
			if($editpost->subcattitle == '0'){
				$subcattemp = array();
				$subcatt =  $subcattemp;
			}else{
				$subcatt =  json_decode($editpost->subcattitle);
			}			
			//echo $parentcatvalue;
			$parentCat = $categorie::where('cattitle', $request->parentcatvalue )->first();
			//$subCat = $categorie::where('subcattitle', $request->new_cat_value )->first();
			$editpost->cattitle = $parentcatvalue;
			if(in_array($request->new_cat_value, $subcatt))
			{
				echo "Child category alreday exist.";	
			}
			else{
				array_push($subcatt, $request->new_cat_value);
				$editpost->subcattitle = $subcatt;
			$editpost->catimage = '/public/images/categorie/fff.png';
			$editpost->save();
				echo "Parent category and child category update successfully.";
			}					
			
				
		}
		else{
			
			$duplicateCat = $categorie::where('cattitle', trim($request->new_cat_value) )->first();
			//echo $duplicateCat;
			$categorie->cattitle = $new_cat_value;
			$categorie->subcattitle = '0';
			$categorie->catimage = '/public/images/categorie/fff.png';
			if (!empty($duplicateCat)) 
						{
						echo "Category alreday exist.";							
						} 
				else
						{
							$categorie->save();
							echo "Category update successfully.";
						}
		}	
				
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
		$deleteCat = categorie::find($id);
		// $trail = new Trail($editpost);
		// $trail->save();
		$deleteCat->delete();
        session()->flash('deletecat','Category Deleted Successfully');
         return redirect('/admin/postCategory');
    }
	
}
