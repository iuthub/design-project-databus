<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    //
    protected $fillable = [
        'title',
        'content',
        'city_id',
        'views',
        'district_id',
        'likes',
        'dislikes',
        'type',
        'user_id',
        'status',
        'date',
        'extra',
        'lat',
        'lng'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function photos() {
        return $this->hasMany(Photo::class);
    }
}
