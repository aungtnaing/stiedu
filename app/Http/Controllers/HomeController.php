<?php namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;


use App\Category;
use App\Maincategory;
use App\Mainslide;
use App\Testimonials;
use App\Professors;
use App\Ourgallerys;

use App\Events;
use App\Partners;
use App\Blogs;

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
		
		$categorys = Category::All();
		
		$mainslides = Mainslide::where('active',1)
		->orderBy('slideno','asc')
		->take(4)
		->get();
	
		$testimonials = Testimonials::where('active',1)
						->orderBy('id','DESC')
						->take(3)
						->get();

		$professors = Professors::where('active',1)
		                ->take(10)
						->get();				

			$blogs = Blogs::where('active',1)
						->orderBy('id','DESC')
						->take(3)
						->get();
		$maincategorys = Maincategory::All();

		$events = Events::where('active',1)
						->orderBy('id','DESC')
						->take(8)
						->get();
		$partners = Partners::where('active',1)
						->orderBy('id','DESC')
						->take(10)
						->get();	
							$ourgallerys = 	Ourgallerys::where('active',1)
						->orderBy('id','DESC')
						->take(10)
						->get();					
		return view('pages.home')
				->with('categorys', $categorys)
				->with('mainslides', $mainslides)
				->with('testimonials', $testimonials)
				->with('professors', $professors)
				->with('maincategorys', $maincategorys)
				->with('events', $events)
				->with('partners', $partners)
				->with('ourgallerys', $ourgallerys)
				->with('blogs',$blogs);
				
				
		
	}
	
	
	
}
