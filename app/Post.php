<?php

namespace App;

use App\Tag;
use App\Comment;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['body','user_id'];
    
    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function tags(){
    	return $this->hasMany('App\Tag');
    }

    public function comments(){
    	return $this->hasMany('App\Comment');
    }
}
