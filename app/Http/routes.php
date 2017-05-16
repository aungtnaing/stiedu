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

			$categorys = Category::All();

			$user = User::find($userid);
			
			return view('pages.authorprofile')
			->with('user', $user)
			->with('categorys', $categorys);
			
			
		});

		
	
	
	Route::resource('profiles','ProfilesController');

	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
		]);



	
	Route::group(['middleware' => 'auth'],function()
	{
		
		

	
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
					Route::resource('priorities','PrioritiesController');
					Route::resource('ourgallerys','OurgallerysController');
					Route::resource('maincategorys','MaincategoryController');
					Route::resource('categorys','CategoryController');
					Route::resource('userspannel','UserspannelController');
					
				});

			});
			
		});



		
	});

	