<?php namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;


use App\Category;
use App\Posts;


use View;
use Config;		


class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

   
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
	
		$this->middleware('auth');
		// $this->middleware('guest');
	
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	
			$mainslides = Posts::where('active',1)
			->where('mainslide', 1)
			->orderBy('id','DESC')
			->get();


		$trvelsectorposts = Posts::where('active',1)
			->where('categoryid', 1)
			->take(6)
			->orderBy('id','DESC')
			->get();


		return view('pages.home')
				->with('travelsectorposts', $trvelsectorposts)
				->with('mainslides', $mainslides);
				
		 	
		 	
  	}
 
  
  	
}
