<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model {

	//
	protected $table = 'posts';
	

	public function category()
    {
        return $this->belongsTo('App\Category','categoryid');
    }

    public function user()
    {
        return $this->belongsTo('App\User','userid');
    }

     public function comments()
    {
        return $this->hasMany('App\Comments', 'postid');
    }


  
}
