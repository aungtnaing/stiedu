<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Professors extends Model {

	//
	protected $table = 'professors';
	// protected $fillable = ["id","title","photourl1","mtitle", "description"];
	public function courses()
    {
        return $this->hasMany('App\Courses', 'professorid');
    }
	

}
