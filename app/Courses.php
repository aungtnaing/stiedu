<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model {

	//
	protected $table = 'courses';
	

	public function category()
    {
        return $this->belongsTo('App\Category','categoryid');
    }

    public function professor()
    {
        return $this->belongsTo('App\Professors','professorid');
    }

    public function user()
    {
        return $this->belongsTo('App\User','userid');
    }

    

     public function comments()
    {
        return $this->hasMany('App\Comments', 'courseid');
    }


  
}
