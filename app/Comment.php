<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	// belongs to an
	public function announcement() {
		return this-> belongsTo(Announcement::class);
	}
	// belongs to user
	public function user() {
		return this-> belongsTo(User::class);
	}
}
