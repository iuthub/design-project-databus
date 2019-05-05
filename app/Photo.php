<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $fillable = [
		'announcement_id',
		'url'
	];
    // belong to announcemnt
    public function announcemnt() {
    	return $this->belongsTo(Announcement::class);
    }
}
