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
		use App\Posts;
		use App\Books;
		use App\Orderstemp;
		

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


		Route::get('advertisewithus', function() {

				$categorys = Category::All();
			
			return view('pages.advertisewithus')
			->with('categorys', $categorys);
			
			
		});

		Route::get('advertisewithusmyanmar', function() {

					$categorys = Category::All();
			
			return view('pages.advertisewithusmyanmar')
			->with('categorys', $categorys);
			
			
		});

		Route::get('privacypolicy', function() {

				$categorys = Category::All();
			
			return view('pages.privacypolicy')
			->with('categorys', $categorys);
			
			
		});

		Route::get('privacypolicymyanmar', function() {
		$categorys = Category::All();
			
			return view('pages.privacypolicymyanmar')
			->with('categorys', $categorys);
			
			
		});

		Route::get('termscondation', function() {

				$categorys = Category::All();
			
			return view('pages.termscondation')
			->with('categorys', $categorys);
			
			
		});

		Route::get('termscondationmyanmar', function() {

				$categorys = Category::All();
			
			return view('pages.termscondationmyanmar')
			->with('categorys', $categorys);
			
			
		});

		Route::get('storelocator', function() {

					$categorys = Category::All();
			
			return view('pages.storelocator')
			->with('categorys', $categorys);
			
			
		});

		Route::get('storelocatormyanmar', function() {

			$categorys = Category::All();
			
			return view('pages.storelocatormyanmar')
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

		Route::get('postlists/{categoryid}', ['as' => 'postlists', function ($categoryid) {
    	$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', $categoryid)
			->where('name','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlists')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
			
}]);

	
	
	Route::get('postlistsmyanmar/{categoryid}', ['as' => 'postlistsmyanmar', function ($categoryid) {
    	$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', $categoryid)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlistsmyanmar')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
}]);

	

		

		Route::get('magazine', function() {

		$categorys = Category::All();

			
		$travelsectorposts = Posts::where('active',1)
			->where('categoryid', 1)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(5)
			->get();

		$exposures = Posts::where('active',1)
			->where('categoryid', 5)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();

			$picturesques = Posts::where('active',1)
			->where('categoryid', 6)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(14)
			->get();


		$arrivals = Posts::where('active',1)
			->where('categoryid', 7)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

		$infocus = Posts::where('active',1)
			->where('categoryid', 8)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

		$deperatures = Posts::where('active',1)
			->where('categoryid', 9)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$snapshops = Posts::where('active',1)
			->where('categoryid', 10)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$checkins = Posts::where('active',1)
			->where('categoryid', 11)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$standouts = Posts::where('active',1)
			->where('categoryid', 12)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$undergrounds = Posts::where('active',1)
			->where('categoryid', 13)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

				$popularposts = Posts::where('active',1)
			->where('popular',1)
			->where('categoryid','!=', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();

		$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();


				$book = Books::find(Books::max('id'));

			
			return view('pages.magazines')
			->with('categorys', $categorys)
			->with('travelsectorposts', $travelsectorposts)
			->with('exposures', $exposures)
			->with('picturesques', $picturesques)
			->with('arrivals', $arrivals)
			->with('infocus', $infocus)
			->with('deperatures', $deperatures)
			->with('snapshops', $snapshops)
			->with('checkins', $checkins)
			->with('standouts', $standouts)
			->with('undergrounds', $undergrounds)
			->with('popularposts', $popularposts)
			->with('recentposts', $recentposts)
			->with('book', $book);
;
			
			
		});

	Route::get('magazinemyanmar', function() {

		$categorys = Category::All();

			
		$travelsectorposts = Posts::where('active',1)
			->where('categoryid', 1)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(5)
			->get();

		$exposures = Posts::where('active',1)
			->where('categoryid', 5)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(6)
			->get();

			$picturesques = Posts::where('active',1)
			->where('categoryid', 6)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(14)
			->get();


		$arrivals = Posts::where('active',1)
			->where('categoryid', 7)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

		$infocus = Posts::where('active',1)
			->where('categoryid', 8)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

		$deperatures = Posts::where('active',1)
			->where('categoryid', 9)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$snapshops = Posts::where('active',1)
			->where('categoryid', 10)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$checkins = Posts::where('active',1)
			->where('categoryid', 11)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$standouts = Posts::where('active',1)
			->where('categoryid', 12)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

			$undergrounds = Posts::where('active',1)
			->where('categoryid', 13)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(3)
			->get();

				$popularposts = Posts::where('active',1)
			->where('popular',1)
			->where('categoryid','!=', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();

		$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();


				$book = Books::find(Books::max('id'));

			
			return view('pages.magazinesmyanmar')
			->with('categorys', $categorys)
			->with('travelsectorposts', $travelsectorposts)
			->with('exposures', $exposures)
			->with('picturesques', $picturesques)
			->with('arrivals', $arrivals)
			->with('infocus', $infocus)
			->with('deperatures', $deperatures)
			->with('snapshops', $snapshops)
			->with('checkins', $checkins)
			->with('standouts', $standouts)
			->with('undergrounds', $undergrounds)
			->with('popularposts', $popularposts)
			->with('recentposts', $recentposts)
			->with('book', $book);
;
			
			
		});

	Route::get('booking', function() {

				$categorys = Category::All();
			
			return view('pages.booking')
			->with('categorys', $categorys);
			
			
		});

	


		Route::get('postdetails/{postid}', [
			'uses' => 'PostsController@postdetails'
			]);

		Route::get('postdetailsmyanmar/{postid}', [
			'uses' => 'PostsController@postdetailsmyanmar'
			]);

		
		
		Route::resource('profiles','ProfilesController');

		Route::controllers([
			'auth' => 'Auth\AuthController',
			'password' => 'Auth\PasswordController',
			]);

		
		Route::resource('joinus','JoinusController');


	
		Route::group(['middleware' => 'auth'],function()
		{
			
			
		// Route::get('maketest/{id}', [
		// 	'uses' => 'CheckoutController@maketest'
		// 	]);

			Route::get('bookstore', function() {

				$categorys = Category::All();

				$books = Books::orderBy('volnumber', 'DESC')
								->get();
				$affed = Orderstemp::where('userid', Auth::user()->id)->delete();
				
				$bookcols = Books::distinct()->get(['volnumber']);
			
			return view('pages.bookstore')
			->with('categorys', $categorys)
			->with('books', $books)
			->with('bookcols', $bookcols);
			
			
		});
			Route::get('bookstoremyanmar', function() {

				$categorys = Category::All();

				$books = Books::orderBy('volnumber', 'DESC')
								->get();
				$affed = Orderstemp::where('userid', Auth::user()->id)->delete();
				
				$bookcols = Books::distinct()->get(['volnumber']);
			
			return view('pages.bookstoremyanmar')
			->with('categorys', $categorys)
			->with('books', $books)
			->with('bookcols', $bookcols);
			
			
		});


			Route::post('makeorder', [
			'uses' => 'CheckoutController@makeorder'
			]);

			Route::resource('checkouts','CheckoutController');
			Route::resource('checkoutsmyanmar','CheckoutmyanmarController');
			
			Route::get('subscribecheckouts/{bookid}', [
			'uses' => 'CheckoutController@subscribeindex'
			]);

			Route::get('subscribemyanmarcheckouts/{bookid}', [
			'uses' => 'CheckoutmyanmarController@subscribemyanmarindex'
			]);


			Route::resource('comments','CommentsController');
			Route::resource('replycomments','ReplycommentsController');
			
			Route::group(['middleware' => 'rolewaredashboard'],function()
			{
				Route::resource('dashboard','DashboardController');

			});	
			Route::group(['middleware' => 'roleware6'],function()
			{
					Route::resource('adlists','AdlistsController');
			});		

			Route::group(['middleware' => 'roleware5'],function()
			{
					Route::resource('orderlists','OrderlistsController');
			});		

			Route::group(['middleware' => 'roleware3_4'],function()
			{
				
					
					Route::resource('posts','PostsController');
					Route::resource('postsmyanmar','PostsmyanmarController');

				Route::group(['middleware' => 'roleware2'],function()
				{
					

					
					Route::resource('books','BooksController');

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



			
		});

		