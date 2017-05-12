<?php namespace App\Http\Controllers;


use App\Category;
use App\Mainslide;
use App\Testimonials;
use App\Professors;

use View;
use Config;



class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
	

		


		$categorys = Category::All();

			
		$mainslides = Mainslide::where('active',1)
		->orderBy('slideno','asc')
		->take(10)
		->get();
	
$testimonials = Testimonials::where('active',1)
						->orderBy('id','DESC')
						->take(3)
						->get();

		$professors = Professors::where('active',1)
						->orderBy('id','DESC')
						->take(8)
						->get();				

		return view('pages.home')
				->with('categorys', $categorys)
				->with('mainslides', $mainslides)
				->with('testimonials', $testimonials)
				->with('professors', $professors);
	}

	public function myanmarindex()
	{

		
		$categorys = Category::orderBy('id', 'desc')->get();


		$mainslides = Mainslide::where('active',1)
		->orderBy('slideno','asc')
		->take(10)
		->get();
		
		$testimonials = Testimonials::where('active',1)
						->orderBy('id','DESC')
						->take(3)
						->get();
		$professors = Professors::where('active',1)
						->orderBy('id','DESC')
						->take(8)
						->get();				

		return view('pages.homemyanmar')
				->with('categorys', $categorys)
				->with('mainslides', $mainslides)
				->with('testimonials', $testimonials)
				->with('professors', $professors);				
		
	}

	

}


