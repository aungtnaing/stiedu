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


		Route::get('advertisewithus', function() {

			$categorys = Category::orderBy('id', 'desc')->get();
			
			return view('pages.advertisewithus')
			->with('categorys', $categorys);
			
			
		});

		Route::get('advertisewithusmyanmar', function() {

			$categorys = Category::orderBy('id', 'desc')->get();
			
			return view('pages.advertisewithusmyanmar')
			->with('categorys', $categorys);
			
			
		});

		Route::get('privacypolicy', function() {

			$categorys = Category::orderBy('id', 'desc')->get();
			
			return view('pages.privacypolicy')
			->with('categorys', $categorys);
			
			
		});

		Route::get('privacypolicymyanmar', function() {

			$categorys = Category::orderBy('id', 'desc')->get();
			
			return view('pages.privacypolicymyanmar')
			->with('categorys', $categorys);
			
			
		});

		Route::get('termscondation', function() {

			$categorys = Category::orderBy('id', 'desc')->get();
			
			return view('pages.termscondation')
			->with('categorys', $categorys);
			
			
		});

		Route::get('termscondationmyanmar', function() {

			$categorys = Category::orderBy('id', 'desc')->get();
			
			return view('pages.termscondationmyanmar')
			->with('categorys', $categorys);
			
			
		});

		Route::get('storelocator', function() {

			$categorys = Category::orderBy('id', 'desc')->get();
			
			return view('pages.storelocator')
			->with('categorys', $categorys);
			
			
		});

		Route::get('storelocatormyanmar', function() {

			$categorys = Category::orderBy('id', 'desc')->get();
			
			return view('pages.storelocatormyanmar')
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

		Route::get('authorprofile/{userid}', function($userid) {

			$categorys = Category::orderBy('id', 'desc')->get();

			$user = User::find($userid);
			
			return view('pages.authorprofile')
			->with('user', $user)
			->with('categorys', $categorys);
			
			
		});


		Route::get('postdetails/{postid}', [
			'uses' => 'PostsController@postdetails'
			]);


		
		Route::resource('profiles','ProfilesController');

		

		Route::controllers([
			'auth' => 'Auth\AuthController',
			'password' => 'Auth\PasswordController',
			]);

		
		Route::resource('joinus','JoinusController');

		Route::group(['middleware' => 'auth'],function()
		{
			Route::resource('comments','CommentsController');
			Route::resource('replycomments','ReplycommentsController');
			Route::group(['middleware' => 'roleware2'],function()
			{
				Route::resource('dashboard','DashboardController');
				Route::resource('posts','PostsController');
				Route::resource('postsmyanmar','PostsmyanmarController');
				
				Route::get('dashboarduserprofile', [
					'uses' => 'ProfilesController@dashboarduserindex'
					]);

				Route::group(['middleware' => 'roleware'],function()
				{
					
					Route::resource('categorys','CategoryController');
					Route::resource('userspannel','UserspannelController');
					
				});

			});
			
			
		});

		