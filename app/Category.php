<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	protected $fillable = [
		'name'
	];
	
	// get all anouncents of category
	public function announcement() {
		return $this->hasMany(Announcement::class); 
	}
    
}
