<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\posttag;

class postTagController extends Controller
{
    public function newtag(Request $request)
	{
		$tag = new posttag;
		$duplicatetag = $tag::where('tagtitle', $request->new_tag_value )->first();
		$tag->tagtitle	= $request->new_tag_value;
		$tag->subtagtitle = $request->new_tag_value;
		
		if (!empty($duplicatetag)) 
					{
					echo "Tags alreday exist.";						
					} 
			else
					{
						$tag->save();
						echo "Tags update successfully.";
					}
	}
	
	
}
