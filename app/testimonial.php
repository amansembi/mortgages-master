<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Cviebrock\EloquentSluggable\Sluggable;

class testimonial extends Model
{
    use Sluggable;

	public function sluggable()
	{
		return [
			'slug' => [
				'source' => 'heading'
			],
		];
	}
}
