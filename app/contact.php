<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class contact extends Model
{
   use Sluggable;

	public function sluggable()
	{
		return [
			'slug' => [
				'source' => 'name'
			],
		];
	}
}
