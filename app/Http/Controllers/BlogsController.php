<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blogs;
use App\Category;
use DB;

use File;
use Input;

class BlogsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$blogs = Blogs::All();
    	
		return view("dashboard.blogs.blogspannel")
		->with("blogs", $blogs);
	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view("dashboard.blogs.blogcreate");

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function createblog()
	{
		//
		return view("pages.blogscreate");

	}
	public function blogdetails($blogid)
	{
		
		$blogdetail = Blogs::find($blogid);

		$categorys = Category::orderBy('id', 'desc')
								->take(7)
								->get();
		
		
		$bloglists = Blogs::orderBy('id', 'desc')
						->where('id','!=',$blogid)
						->take(6)
						->get();
		
		

		return view("pages.blogdetails")
					->with('blogdetail',$blogdetail)
					->with('categorys',$categorys)
					->with('bloglists',$bloglists);
					

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		

		$this->validate($request,[
			'title' => 'required|max:255',
			'bloger' => 'required|max:255',
			'content' => 'required|max:5000',
			]);


		$blog = new Blogs();
		$imagePath = public_path() . '/images/blogs/';
		$lastid = DB::table('blogs')->select('id')->orderBy('id', 'DESC')->first();
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
		
		
		if(Input::file('photourl1')!="")
		{
			if(Input::file('photourl1')->isValid())
			{
				$name =  time()  . '-photo' . '.' . $input['photourl1']->getClientOriginalExtension();
				File::exists($destinationPath) or File::makeDirectory($destinationPath, 0777, true, true);
				Input::file('photourl1')->move($destinationPath, $name); // uploading file to given path
				$photourl1 = "/images/blogs/" . $directory . '/photos/' .  $name;
			
			}

		}

		$blog->title = $request->input("title");
		$blog->bloger = $request->input("bloger");	
		$blog->content = $request->input("content");
		
		
		$blog->active = 0;
		if (Input::get('active') === '1'){$blog->active = 1;}

	
		$blog->photourl1 = $photourl1;
		
		$blog->save();

		if($request->input("public")==='Save')
		{
		return redirect()->route("blogs.index");
		}
		else
		{
			 return redirect('/');
		}
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
		
		$blog = Blogs::find($id);
		return view('dashboard.blogs.blogedit')->with('blog',$blog);
	}

	/**
	 * Update the specified resource in storage.
	 *testimonial
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$this->validate($request,[
		
			'title' => 'required|max:255',
			'bloger' => 'required|max:255',
			'content' => 'required|max:5000',
			
			]);
		
		$blog = Blogs::find($id);
			
		$imagePath = public_path() . '/images/blogs/';
	
		$directory = $id;


		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/blogs';
	
		$photourl1 = $blog->photourl1;
		// ini_set('post_max_size', '64M');
		// ini_set('upload_max_filesize', '64M');
	
		if(Input::file('photourl1')!="")
		{
			

			 if(Input::file('photourl1')->isValid())
			 {
				if($photourl1!="")
				{
					if(file_exists(public_path() .$photourl1))
					{
						unlink(public_path() . $photourl1);
					}
				}
					


				$name =  time() . '-photo' . '.' . $input['photourl1']->getClientOriginalExtension();
				File::exists($destinationPath) or File::makeDirectory($destinationPath, 0777, true, true);
				Input::file('photourl1')->move($destinationPath, $name); // uploading file to given path
				$photourl1 = "/images/blogs/" . $directory . '/photos/' .  $name;
			 }

		}
	
	
		$blog->title = $request->input("title");
		$blog->bloger = $request->input("bloger");	
		$blog->content = $request->input("content");


		$blog->active = 0;
		if (Input::get('active') === ""){$blog->active = 1;}

		
		$blog->photourl1 = $photourl1;
		
		$blog->save();
		return redirect()->route("blogs.index");
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
			$blog = Blogs::find($id);

		$photourl1 = $blog->photourl1;
	
			if($photourl1!="")
				{
					if(file_exists(public_path() .$photourl1))
					{
						unlink(public_path() . $photourl1);
					}
				}


		
		Blogs::destroy($id);

		return redirect()->route("blogs.index");
	}

	public function rrmdir($dir) {
		if (is_dir($dir)) {
			$objects = scandir($dir);
			foreach ($objects as $object) {
				if ($object != "." && $object != "..") {
					if (filetype($dir."/".$object) == "dir") 
						rrmdir($dir."/".$object); 
					else unlink   ($dir."/".$object);
				}
			}
			reset($objects);
			rmdir($dir);
		}
	}

}
