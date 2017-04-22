<?php namespace App\Http\Controllers;


use App\Posts;
use App\Category;

use View;
use Config;
use Illuminate\Http\Request;





class LanguageController extends Controller {

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
		
	}



	public function changemn()
	{
	
		// $a = $_SERVER['HTTP_REFERER'];
		
		// $page = "pages.homemyanmar";
		// if (strpos($a, 'about') !== false)
		// {
		// 	// $page = "pages.aboutmyanmar";
		// 	 return redirect('aboutusmyanmar');
		// }
		// if (strpos($a, 'services') !== false)
		// {
		// 	 return redirect('servicesmyanmar');
		// }
		// if (strpos($a, 'contact') !== false)
		// {
		// 	 return redirect('contactusmyanmar');
		// }

		// if (strpos($a, 'projectdetail') !== false)
		// {
		// 	$var = explode("/", $a);
			 
		// 	$projectid = $var[sizeof($var)-1];

		// 	return redirect()->action(
		// 		    'ProjectsController@projectdetailmyanmar', ['projectid' => $projectid]
		// 		);
		
		// }



		// $mainslides = Mainslide::where('active',1)
		// 	->orderBy('slideno','asc')
		// 	->take(10)
		// 	->get();

		$mainslides = Posts::where('active',1)
			->where('mainslide', 1)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->get();


		$trvelsectorposts = Posts::where('active',1)
			->where('categoryid', 1)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();

	$videoposts = Posts::where('active',1)
			->where('categoryid', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();


		$specialfeatures = Posts::where('active',1)
			->where('categoryid', 3)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();


				$reviews = Posts::where('active',1)
			->where('categoryid', 4)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

	$latestblogs = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();


	
		$categorys = Category::All();

		return view('pages.homemyanmar')
				->with('travelsectorposts', $trvelsectorposts)
				->with('videoposts', $videoposts)
				->with('specialfeatures', $specialfeatures)
				->with('reviews', $reviews)
				->with('latestblogs', $latestblogs)
				->with('categorys', $categorys)
				->with('mainslides', $mainslides);
		 	
	}

	public function changeen()
	{
		
		// $a = $_SERVER['HTTP_REFERER'];

				
		// $page = "pages.homemyanmar";
		// if (strpos($a, 'about') !== false)
		// {
		// 	// $page = "pages.aboutmyanmar";
		// 	 return redirect('aboutus');
		// }
		// if (strpos($a, 'services') !== false)
		// {
		// 	 return redirect('services');
		// }
		// if (strpos($a, 'contact') !== false)
		// {
		// 	 return redirect('contactus');
		// }

		// if (strpos($a, 'projectdetail') !== false)
		// {
		// 	$var = explode("/", $a);
			 
		// 	$projectid = $var[sizeof($var)-1];

		// 	return redirect()->action('ProjectsController@projectdetail', ['projectid' => $projectid]);
		// }

		
	$mainslides = Posts::where('active',1)
			->where('mainslide', 1)
			->where('name','!=','')
			->orderBy('id','DESC')
			->get();


		$trvelsectorposts = Posts::where('active',1)
			->where('categoryid', 1)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();

	$videoposts = Posts::where('active',1)
			->where('categoryid', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();


		$specialfeatures = Posts::where('active',1)
			->where('categoryid', 3)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();


				$reviews = Posts::where('active',1)
			->where('categoryid', 4)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();


		$latestblogs = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();


		$categorys = Category::All();

		return view('pages.home')
				->with('travelsectorposts', $trvelsectorposts)
				->with('videoposts', $videoposts)
				->with('specialfeatures', $specialfeatures)
				->with('reviews', $reviews)
				->with('latestblogs', $latestblogs)
				->with('categorys', $categorys)
				->with('mainslides', $mainslides);
				
		 	
	}

	public function homemyanmar()
	{
		
	$mainslides = Posts::where('active',1)
			->where('mainslide', 1)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->get();


		$trvelsectorposts = Posts::where('active',1)
			->where('categoryid', 1)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();

	$videoposts = Posts::where('active',1)
			->where('categoryid', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();


		$specialfeatures = Posts::where('active',1)
			->where('categoryid', 3)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();


				$reviews = Posts::where('active',1)
			->where('categoryid', 4)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

	$latestblogs = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();


	
		$categorys = Category::All();

		return view('pages.homemyanmar')
				->with('travelsectorposts', $trvelsectorposts)
				->with('videoposts', $videoposts)
				->with('specialfeatures', $specialfeatures)
				->with('reviews', $reviews)
				->with('latestblogs', $latestblogs)
				->with('categorys', $categorys)
				->with('mainslides', $mainslides);
		 	
	}

	

}


