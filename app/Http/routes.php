	<?php

		/*
		|--------------------------------------------------------------------------
		| Application Routes
		|--------------------------------------------------------------------------
		|
		| Here is where you can register all of the routes for an application.
		| It's a breeze. Simply tell Laravel the URIs it should respond to
		| and give it the controller to call when that URI is requested.
		|
		*/

		use App\User;
		use App\Category;
		use App\Courses;
		use App\Professors;
		use App\Ourgallerys;
		use App\Partners;
		use App\Blogs;


		Route::get('/', 'WelcomeController@index');
		Route::get('home', 'HomeController@index');
		
		Route::get('mn', 'LanguageController@changemn');
		Route::get('en', 'LanguageController@changeen');

		

		Route::get('homemyanmar', 'LanguageController@homemyanmar');



		Route::get('aboutus', function() {

			$categorys = Category::All();
			
			return view('pages.about')
			->with('categorys', $categorys);
			
			
		});

		Route::get('organisationcharts', function() {

			$categorys = Category::All();
			
			return view('pages.chart')
			->with('categorys', $categorys);
			
			
		});

		Route::get('officalvideo', function() {

			$categorys = Category::All();
			
			return view('pages.ytube')
			->with('categorys', $categorys);
			
			
		});



		Route::get('contactus', function() {

			$categorys = Category::All();
			
			return view('pages.contactus')
			->with('categorys', $categorys);
			
			
		});

		Route::get('applyus', function() {

			$categorys = Category::All();
			
			return view('pages.applyevent')
			->with('categorys', $categorys);
			
			
		});

		Route::get('aboutusmyanmar', function() {

			$categorys = Category::All();
			
			return view('pages.aboutmyanmar')
			->with('categorys', $categorys);
			
			
		});


		Route::get('stimuvision', function() {

			return view('pages.stivision');
			
			
			
		});

		Route::get('learningandstudying', function() {

			return view('pages.learningandstudying');
			
			
			
		});

		Route::get('stimumission', function() {

			return view('pages.stimission');
			
			
			
		});

		Route::get('ourgall', function() {

			$ourgallerys = 	Ourgallerys::where('active',1)
						->orderBy('id','DESC')
						->take(10)
						->get();	


			return view('pages.ourgallery')->with('ourgallerys', $ourgallerys);
			
			
			
		});

		Route::get('ourpartners', function() {

$partners = Partners::where('active',1)
						->orderBy('id','DESC')
						->take(10)
						->get();		

			return view('pages.ourpartners')->with('partners', $partners);
			
			
			
		});

		Route::get('history', function() {

			return view('pages.history');
			
			
			
		});

		Route::get('value', function() {

			return view('pages.value');
			
			
			
		});

		Route::get('ourcampus', function() {

			return view('pages.ourcampus');
			
			
			
		});

		Route::get('ourprogram', function() {

			return view('pages.ourprogram');
			
			
			
		});

		Route::get('ourfaculty', function() {

			return view('pages.ourfaculty');
			
			
			
		});

		Route::get('ourgraduates', function() {

			return view('pages.ourgraduates');
			
			
			
		});

		Route::get('stimugovernance', function() {

			return view('pages.stimugovernance');
			
			
			
		});


		Route::get('graduatelists/{id}', ['as' => 'courselists', function ($id) {
			$categorys = Category::orderBy('id', 'desc')
								->take(7)
								->get();

			if($id==0)
			{
				$categoryname = "Undergraduate Programs";

			}
			else
			{
				$categoryname = "Postgraduate Programs";

			}

			// echo $id;

			// die();
			
			$courselists = Courses::where('active',1)
			->where('graduate', $id)
			->orderBy('id','DESC')
			->get();

			
			
			return view('pages.courselists')
			->with('courselists', $courselists)
			->with('categorys', $categorys)
			->with('categoryname', $categoryname);
			
			
		}]);

		Route::get('sitemap', function() {

			return view('pages.sitemap');
			
			
			
		});

		
		

		Route::get('contactus', function() {

			$categorys = Category::All();
			
			return view('pages.contactus')
			->with('categorys', $categorys);
			
			
		});

		Route::get('contactusmyanmar', function() {

			$categorys = Category::All();
			
			return view('pages.contactusmyanmar')
			->with('categorys', $categorys);
			
			
		});



		Route::get('authorprofile/{userid}', function($userid) {

			// $categorys = Category::All();

			$user = User::find($userid);
			
			return view('pages.authorprofile')
			->with('user', $user);
			
			
		});

		Route::get('facultyprofile/{facultyid}', function($facultyid) {

			$categorys = Category::orderBy('id', 'desc')
								->take(7)
								->get();
		
		
		$bloglists = Blogs::orderBy('id', 'desc')
						->take(6)
						->get();

			$faculty = Professors::find($facultyid);
			
			return view('pages.facultyprofile')
			->with('faculty', $faculty)
			->with('categorys', $categorys)
			->with('bloglists', $bloglists);
			
			
		});

		
	Route::get('scholarships', function() {

			
		
		$categorys = Category::orderBy('id', 'desc')
								->take(7)
								->get();
		
		$courselists = Courses::All();
		

		return view("pages.scholarships")
					->with('courselists',$courselists)
					->with('categorys',$categorys);
			
			
		});
	
	Route::resource('profiles','ProfilesController');

	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
		]);



	Route::get('coursedetails/{courseid}', [
		'uses' => 'CoursesController@coursedetails'
		]);

		Route::get('blogdetails/{blogid}', [
		'uses' => 'BlogsController@blogdetails'
		]);

	Route::get('eventdetails/{eventid}', [
		'uses' => 'EventsController@eventdetails'
		]);

	Route::get('courselists/{categoryid}', ['as' => 'courselists', function ($categoryid) {
			$categorys = Category::orderBy('id', 'desc')
								->take(7)
								->get();

			$category = Category::find($categoryid);
			$categoryname = $category->name;

			$courselists = Courses::where('active',1)
			->where('categoryid', $categoryid)
			->orderBy('id','DESC')
			->get();

			
			
			return view('pages.courselists')
			->with('courselists', $courselists)
			->with('categorys', $categorys)
			->with('categoryname', $categoryname);
			
			
		}]);

	Route::get('bloglists', function () {
			

			$categorys = Category::orderBy('id', 'desc')
								->take(7)
								->get();

			$bloglists = Blogs::where('active',1)
					->orderBy('id','DESC')
					->get();

				
		$blolists = Blogs::orderBy('id', 'desc')
						->where('active',1)
						->take(6)
						->get();
			
			return view('pages.bloglists')
			->with('bloglists', $bloglists)
			->with('blolists', $blolists)
			->with('categorys', $categorys);
			
			
			
		});


	Route::get('facultylists', function () {
			

			$categorys = Category::orderBy('id', 'desc')
								->take(7)
								->get();

			$facultylists = Professors::where('active',1)
						->get();

				
		$blolists = Blogs::orderBy('id', 'desc')
						->where('active',1)
						->take(6)
						->get();
			
			return view('pages.facultylists')
			->with('facultylists', $facultylists)
			->with('blolists', $blolists)
			->with('categorys', $categorys);
			
			
			
		});

	Route::get('visitorinfo/{courseid}', [
		'uses' => 'VisitorController@createvisitor'
		]);

	Route::get('visitorinfoadmission/{courseid}', [
		'uses' => 'VisitorController@seeksadmission'
		]);

	Route::get('enrollprogram/{courseid}', [
		'uses' => 'VisitorController@enrollprogram'
		]);

	Route::resource('visitors','VisitorController');
		Route::resource('applys','ApplyController');


	Route::get('getexamresults', [
		'uses' => 'ExamresultsController@getexamresults'
		]);

	Route::group(['middleware' => 'auth'],function()
	{
		
		Route::resource('examresults','ExamresultsController');

		Route::get('yourtestimonials', [
		'uses' => 'TestimonialsController@createtestimonial'
		]);

		

		Route::get('yourblogs', [
		'uses' => 'BlogsController@createblog'
		]);
			Route::resource('comments','CommentsController');
		Route::resource('replycomments','ReplycommentsController');
	
		Route::group(['middleware' => 'rolewaredashboard'],function()
		{
			Route::resource('dashboard','DashboardController');

		});	
	

		Route::group(['middleware' => 'roleware3_4'],function()
		{
			
			
			// Route::resource('posts','PostsController');
			// Route::resource('postsmyanmar','PostsmyanmarController');

			Route::group(['middleware' => 'roleware2'],function()
			{
				

				
				Route::get('dashboarduserprofile', [
					'uses' => 'ProfilesController@dashboarduserindex'
					]);

				

				Route::group(['middleware' => 'roleware'],function()
				{
					Route::resource('mainslides','MainslideController');
					
					Route::resource('testimonials','TestimonialsController');
					Route::resource('blogs','BlogsController');
					Route::resource('professors','ProfessorsController');
					Route::resource('partners','PartnersController');
					
					Route::resource('priorities','PrioritiesController');
					Route::resource('ourgallerys','OurgallerysController');
					Route::resource('maincategorys','MaincategoryController');
					Route::resource('categorys','CategoryController');
					Route::resource('userspannel','UserspannelController');
					
					Route::resource('courses','CoursesController');
					Route::resource('events','EventsController');
				});

			});
			
		});



		
	});

	