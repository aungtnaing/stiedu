<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	//
	protected $table = 'category';
	protected $fillable = ["id","name","mname"];

	public function maincategory()
    {
        return $this->belongsTo('App\Maincategory','maincategoryid');
    }
     public function courses()
    {
        return $this->hasMany('App\Courses', 'categoryid');
    }

}
