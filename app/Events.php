<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model {

	//
	protected $table = 'events';
	

	

    // public function firstspeaker()
    // {
    //     return $this->belongsTo('App\Professors','firstspeakerid');
    // } 
    // public function secondspeaker()
    // {
    //     return $this->belongsTo('App\Professors','secondspeakerid');
    // }

    //  public function thirdspeaker()
    // {
    //     return $this->belongsTo('App\Professors','thirdspeakerid');
    // }
    // public function fourthspeaker()
    // {
    //     return $this->belongsTo('App\Professors','fourthspeakerid');
    // }

    //  public function fifthspeaker()
    // {
    //     return $this->belongsTo('App\Professors','fifthspeakerid');
    // }

    public function user()
    {
        return $this->belongsTo('App\User','userid');
    }

    



  
}
