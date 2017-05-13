<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model {

	//
	protected $table = 'comments';
	

 
      public function course()
    {
        return $this->belongsTo('App\Courses','courseid');
    }

       public function user()
    {
        return $this->belongsTo('App\User','userid');
    }

      public function replycomments()
    {
        return $this->hasMany('App\Replycomments', 'commentid');
    }

}
