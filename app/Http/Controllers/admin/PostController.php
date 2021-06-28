<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
//use Illuminate\Support\Facades;
use App\post;
use App\categorie;
use App\posttag;
use App\Mail\SendMail;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$category = new categorie;
    	$posttag = new posttag;
    	$allcat = $category::all();
    	$posttag = $posttag::all();
		// return $posttag;
    	return view('admin/post/post', [	'category'=>$allcat, 'posttag'=>$posttag ]);
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
	 //$req
    public function store(Request $request)
    {
    	$this->validation($request);
    	$post                        = new post;
    	$post->title                = $request->title;
    	$post->subtitle           = $request->subtitle;
    	$post->slug                = $request->slug;
    	$post->description      = $request->description;
    	$post->checkPublish  = $request->checkPublish;
    	$tags                         = $request->tags;
    	$categorydata            = $request->postCat;
    	$post->category         =	json_encode($categorydata);
		if($request->subcatval){
			$subcat = json_encode($request->subcatval);
		}else{
			$subcat = json_encode(array());
		}
    	$post->subcategory    =	$subcat;
    	$post->tags	             =	json_encode($tags);
    	if ($request->hasfile('postimage')) {			
    		$image = $request->file('postimage');
    		$name = time().'.'.$image->getClientOriginalExtension();
    		$destinationPath = public_path('/images/posts');
    		$image->move($destinationPath, $name);
    		$imageurl = '/public/images/posts/'.$name;
    		$post->postimage = $imageurl;		   
    	}
    	 $post->save();
    	$request->session()->flash('postdata','Post published successfully');
    	return redirect(route('admin/post')); 
		//return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
		$post = new post;
    	$posts = $post::all(); 
     	return view('admin/post/allpost', ['posts' => $posts]);	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    	$post = new post;
    	$category = new categorie;
    	$allcat = $category::all();
    	$postallcat = $post::all();
    	$postsbyid = $post::where("id", "=", $id)->get();
    	$tagsdata =  json_decode($postsbyid[0]->tags);			
    	$postCat = $postsbyid[0]->category;
		$postArrycat = json_decode($postCat, true);
		$subcategory = $postsbyid[0]->subcategory;
		$subcategory1 = json_decode($subcategory, true);
		if($subcategory1){ $subcateg = $subcategory1; }else{ $subcateg = [ ]; }
    	if($tagsdata){ $tags = $tagsdata; }else{ $tags = [ ]; }
    	$data = array('postsbyid' => $postsbyid, 'allcat' => $allcat, 'postallcat' => $postallcat, 'postArrycat'=>$postArrycat, 'tags'=>$tags, 'subcategory'=>$subcateg);
				
				//print_r($data);
    	return view('admin/post/editpost')->with($data);
    	//return $subcategory;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
    	$postid = $request->postid;
    	$editpost = post::find($postid);
    	$editpost->title = $request->edittitle;
    	$editpost->subtitle = $request->editsubtitle;
    	$editpost->description = $request->editdescription;
    	$editpost->checkPublish = $request->editcheckPublish;
    	$editpost->category = $request->editpostCat;
    	$editpost->subcategory = $request->subcatval;
    	$editpost->tags = $request->tags;
    	if ($request->hasfile('editpostimage')) {			
    		$image = $request->file('editpostimage');
    		$name = time().'.'.$image->getClientOriginalExtension();
    		$destinationPath = public_path('/images/posts');
    		$image->move($destinationPath, $name);
    		$imageurl = '/public/images/posts/'.$name;
    		$editpost->postimage = $imageurl;		   
    	}
			$editpost->save();

			$request->session()->flash('updatedata','Update data successfully');
			
			
    	return redirect('/admin/post/editpost/'.$postid.'');
	//return $request;




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$deletepost = post::find($id);
		// $trail = new Trail($editpost);
		// $trail->save();
    	$deletepost->delete();
    	session()->flash('deletedata','Row Deleted Successfully');
    	return redirect('/admin/post/allpost');
    }

    public function validation($request)
    {
    	return $this->validate($request, [
    		'title' => 'required|max:255',
    		'subtitle' => 'required|max:255',		
    		'description' => 'required|max:5555',
    		'postimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',		
    	]);
    }
}
