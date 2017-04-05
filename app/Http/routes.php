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

				$categorys = Category::orderBy('id', 'desc')->get();
				
				return view('pages.about')
					->with('categorys', $categorys);
					
				 	
				});

		  Route::get('aboutusmyanmar', function() {

				$categorys = Category::orderBy('id', 'desc')->get();
			
				return view('pages.aboutmyanmar')
					->with('categorys', $categorys);
					
				 	
				});


	

		  Route::get('contactus', function() {

				$categorys = Category::orderBy('id', 'desc')->get();
			
				return view('pages.contactus')
					->with('categorys', $categorys);
					
				 	
				});

		    Route::get('contactusmyanmar', function() {

				$categorys = Category::orderBy('id', 'desc')->get();
				
				return view('pages.contactusmyanmar')
					->with('categorys', $categorys);
				
				 	
				});

		
		Route::resource('profiles','ProfilesController');

		Route::controllers([
			'auth' => 'Auth\AuthController',
			'password' => 'Auth\PasswordController',
			]);


		Route::group(['middleware' => 'auth'],function()
		{
			
			

			Route::group(['middleware' => 'roleware'],function()
			{
				Route::resource('dashboard','DashboardController');
				Route::resource('categorys','CategoryController');
				Route::resource('userspannel','UserspannelController');
				Route::resource('posts','PostsController');
				Route::resource('postsmyanmar','PostsmyanmarController');
				
					Route::get('dashboarduserprofile', [
					'uses' => 'ProfilesController@dashboarduserindex'
					]);
				
			});
			
			
		});

	