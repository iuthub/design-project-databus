<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    // belong to announcemnt
    public function announcemnt() {
    	return this-> belongsTo(Announcement::class);
    }
}
