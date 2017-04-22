<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use DB;

use App\Posts;
use App\Category;

use File;
use Input;
use Auth;

class PostsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		
		if(Auth::user()->roleid==1 || Auth::user()->roleid==2 || Auth::user()->roleid==3)

		{
			$posts = Posts::All();
		}
		else
		{
		$posts = Posts::where('userid', Auth::user()->id)->get();
		}

		return view("dashboard.posts.postspannel")
		->with("posts", $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function postdetails($postid)
	{
		
		$postdetail = Posts::find($postid);
		$categorys = Category::orderBy('id', 'desc')->get();
		$strfbody = "";
		$strsbody = "";
		$strlbody = "";

		
		if(strlen($postdetail->description)>650)
		{

			$strfbody = $this->strCutting($postdetail->description, ".", 650);
			

			if(strlen($postdetail->description)>1000)
			{
				$strsbody = $this->strCutting(substr($postdetail->description, strlen($strfbody) , strlen($postdetail->description)), ".", 500);
				
				$strlbody = substr($postdetail->description, strlen($strfbody) + strlen($strsbody) , strlen($postdetail->description));

			}				
		}
		else
		{

			$strfbody = $postdetail->description;
		}

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


		return view("pages.postdetails")
					->with('postdetail',$postdetail)
					->with('categorys',$categorys)
					->with('fbody', $strfbody)
					->with('sbody', $strsbody)
					->with('lbody', $strlbody)
					->with('popularposts', $popularposts)
					->with('recentposts', $recentposts);

	}
		/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function postdetailsmyanmar($postid)
	{
		
		$postdetail = Posts::find($postid);
		$categorys = Category::orderBy('id', 'desc')->get();
		$strfbody = "";
		$strsbody = "";
		$strlbody = "";

		
		if(strlen($postdetail->mdescription)>650)
		{

			$strfbody = $this->strCutting($postdetail->mdescription, "။", 650);
			

			if(strlen($postdetail->mdescription)>1000)
			{
				$strsbody = $this->strCutting(substr($postdetail->mdescription, strlen($strfbody) , strlen($postdetail->mdescription)), "။", 500);
				
				$strlbody = substr($postdetail->mdescription, strlen($strfbody) + strlen($strsbody) , strlen($postdetail->mdescription));

			}				
		}
		else
		{

			$strfbody = $postdetail->mdescription;
		}

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


		return view("pages.postdetailsmyanmar")
					->with('postdetail',$postdetail)
					->with('categorys',$categorys)
					->with('fbody', $strfbody)
					->with('sbody', $strsbody)
					->with('lbody', $strlbody)
					->with('popularposts', $popularposts)
					->with('recentposts', $recentposts);

	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
		
		$categorys = Category::orderBy('id', 'desc')->get();
		return view("dashboard.posts.postcreate")->with('categorys',$categorys);

	}
	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		

		$this->validate($request,[
			'photourl1' => 'required',
			'photourl2' => 'required',
			'name' => 'required|max:255',
			'description' => 'required|max:5000',
			
			]);


		$post = new Posts();

		$imagePath = public_path() . '/images/posts/';
		$lastid = DB::table('posts')->select('id')->orderBy('id', 'DESC')->first();
		if($lastid!=null)
		{
			$lastid = $lastid->id + 1;
		}
		else
		{
			$lastid = 1;	
		}
		$directory = $lastid;
		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
	
		$photourl1 = "";
		$photourl2 = "";
	
		
		if(Input::file('photourl1')!="")
		{
			if(Input::file('photourl1')->isValid())
			{
				$name =  time()  . '-mainslide' . '.' . $input['photourl1']->getClientOriginalExtension();
				File::exists($destinationPath) or File::makeDirectory($destinationPath, 0777, true, true);
				
				Input::file('photourl1')->move($destinationPath, $name); // uploading file to given path
				$photourl1 = "/images/posts/" . $directory . '/photos/' .  $name;

				if(Input::file('photourl2')!="")
				{
					if(Input::file('photourl2')->isValid())
					{
						$name =  time() . '-detail1' . '.' . $input['photourl2']->getClientOriginalExtension();
						Input::file('photourl2')->move($destinationPath, $name); // uploading file to given path
						$photourl2 = "/images/posts/" . $directory . '/photos/' .  $name;
					}
				}
			}

		}


		$post->name = $request->input("name");
		$post->subtitle = $request->input("subtitle");
		$post->caption1 = $request->input("caption1");
	
		$post->description = $request->input("description");
		
		$post->categoryid = $request->input("category");
		if (Input::get('active') === '1'){$post->active = 1;}
		if (Input::get('mainslide') === '1'){$post->mainslide = 1;}
		if (Input::get('popular') === '1'){$post->popular = 1;}
		$post->userid = $request->user()->id;

		$post->photourl1 = $photourl1;
		$post->photourl2 = $photourl2;
		$post->youtubelink = $request->input("youtubelink");
		
		
		$post->save();
		
		return redirect()->route("posts.index");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		
		$post = Posts::find($id);
		$categorys = Category::orderBy('id', 'desc')->get();

		return view('dashboard.posts.postedit')->with('post', $post)->with('categorys',$categorys);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		//
		
	$this->validate($request,[
		
			'name' => 'required|max:255',
			'description' => 'required|max:5000',
			
			]);


		$post = Posts::find($id);

		$imagePath = public_path() . '/images/posts/';
		$directory = $id;

		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
		
		$photourl1 = $post->photourl1;
		$photourl2 = $post->photourl2;
	
		
		if(Input::file('photourl1')!="")
		{
			
			// echo "has";
			// die();
			if(Input::file('photourl1')->isValid())
			{

				
				if($photourl1!="")
				{
					if(file_exists(public_path().$photourl1))
					{
						
				
						unlink(public_path() . $photourl1);
					}
				}



				$name =  time()  . '-mainslide' . '.' . $input['photourl1']->getClientOriginalExtension();
				Input::file('photourl1')->move($destinationPath, $name); // uploading file to given path
				$photourl1 = "/images/posts/" . $directory . '/photos/' .  $name;
			
			}

		}

				if(Input::file('photourl2')!="")
				{
					if(Input::file('photourl2')->isValid())
					{

						if($photourl2!="")
						{
							if(file_exists(public_path() .$photourl2))
							{
								unlink(public_path() . $photourl2);
							}
						}
						$name =  time() . '-detail1' . '.' . $input['photourl2']->getClientOriginalExtension();
						Input::file('photourl2')->move($destinationPath, $name); // uploading file to given path
						$photourl2 = "/images/posts/" . $directory . '/photos/' .  $name;
					}
				}

		

		$post->name = $request->input("name");
		$post->subtitle = $request->input("subtitle");
		$post->caption1 = $request->input("caption1");
	
		$post->description = $request->input("description");
		
		$post->categoryid = $request->input("category");
		

		$post->active = 0;
		if (Input::get('active') === ""){$post->active = 1;}

		$post->mainslide = 0;
		if (Input::get('mainslide') === ""){$post->mainslide = 1;}

		$post->popular = 0;
		if (Input::get('popular') === ""){$post->popular = 1;}

		$post->userid = $request->user()->id;
			$post->youtubelink = $request->input("youtubelink");
		$post->photourl1 = $photourl1;
		$post->photourl2 = $photourl2;
		
		
		$post->save();
				return redirect()->route("posts.index");
			}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//

		$post = Posts::find($id);
		
		if($post->photourl1!="")
		{
			if(file_exists(public_path() .$post->photourl1))
			{
				unlink(public_path() . $post->photourl1);
			}
		}

		
		
		if($post->photourl2!="")
		{
			if(file_exists(public_path() .$post->photourl2))
			{
				unlink(public_path() . $post->photourl2);
			}
		}
		

	
		
		Posts::destroy($id);

		return redirect()->route("posts.index");
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function strCutting($mainstr, $char, $charcount)
	{
		//

		
		$pos = -1;
		$oldpos = 0;
		$strdata = "";
		while (($pos = strpos($mainstr, $char, $pos+1)) !== false)
		{
			

			$strdata = substr($mainstr, 0, $pos + 1);

				

			$totalcount = strlen($strdata);
			if($totalcount >= $charcount)
			{
				// echo $strdata;
				break;
			}

		}
		
		// die();

		return $strdata;


	}

	
	


}
