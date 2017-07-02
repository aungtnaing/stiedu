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

		Route::get('aboutusmyanmar', function() {

			$categorys = Category::All();
			
			return view('pages.aboutmyanmar')
			->with('categorys', $categorys);
			
			
		});


		Route::get('stimuvision', function() {

			return view('pages.stivision');
			
			
			
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

		Route::get('ourfaculty', function() {

			return view('pages.ourfaculty');
			
			
			
		});

		Route::get('ourfaculty', function() {

			return view('pages.ourfaculty');
			
			
			
		});

		Route::get('stimugovernance', function() {

			return view('pages.stimugovernance');
			
			
			
		});


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

			

			$faculty = Professors::find($facultyid);
			
			return view('pages.facultyprofile')
			->with('faculty', $faculty);
			
			
		});

		
	
	
	Route::resource('profiles','ProfilesController');

	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
		]);



	Route::get('coursedetails/{courseid}', [
		'uses' => 'CoursesController@coursedetails'
		]);

	Route::get('eventdetails/{eventid}', [
		'uses' => 'EventsController@eventdetails'
		]);

	Route::get('courselists/{categoryid}', ['as' => 'courselists', function ($categoryid) {
			$categorys = Category::orderBy('id', 'desc')
								->take(7)
								->get();

			$categoryname = Category::find($categoryid);

			$courselists = Courses::where('active',1)
			->where('categoryid', $categoryid)
			->orderBy('id','DESC')
			->get();

			
			
			return view('pages.courselists')
			->with('courselists', $courselists)
			->with('categorys', $categorys)
			->with('categoryname', $categoryname);
			
			
		}]);

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

	Route::group(['middleware' => 'auth'],function()
	{
		
		Route::get('yourtestimonials', [
		'uses' => 'TestimonialsController@createtestimonial'
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

	