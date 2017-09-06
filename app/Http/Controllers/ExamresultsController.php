<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Examresults;
use App\Category;
use App\Blogs;
use DB;

use File;
use Input;

class ExamresultsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$examresults = Examresults::All();
    	
		return view("dashboard.examresults.examresultspannel")
		->with("examresults", $examresults);
	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view("dashboard.examresults.examresultcreate");

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getexamresults()
	{
		//
		$categorys = Category::orderBy('id', 'desc')
								->take(7)
								->get();
		
		
		$bloglists = Blogs::orderBy('id', 'desc')
						->take(6)
						->get();
		
		$examresults = Examresults::All();

		return view("pages.examresults")->with("examresults", $examresults)
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
			
			]);


		$examresult = new Examresults();
		$imagePath = public_path() . '/images/examresults/';
		$lastid = DB::table('examresults')->select('id')->orderBy('id', 'DESC')->first();
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
				$photourl1 = "/images/examresults/" . $directory . '/photos/' .  $name;
			
			}

		}

		$examresult->title = $request->input("title");
		
		
		
		$examresult->active = 0;
		if (Input::get('active') === '1'){$examresult->active = 1;}

	
		$examresult->photourl1 = $photourl1;
		
		$examresult->save();

		
		return redirect()->route("examresults.index");
		
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
		
		$examresult = Examresults::find($id);
		return view('dashboard.examresults.examresultedit')->with('examresult',$examresult);
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
			
			
			]);
		
		$examresult = Examresults::find($id);
			
		$imagePath = public_path() . '/images/exasmresult/';
	
		$directory = $id;


		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
	
		$photourl1 = $examresult->photourl1;
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
				$photourl1 = "/images/examresults/" . $directory . '/photos/' .  $name;
			 }

		}
	
	
		$examresult->title = $request->input("title");
		


		$examresult->active = 0;
		if (Input::get('active') === ""){$examresult->active = 1;}

		
		$examresult->photourl1 = $photourl1;
		
		$examresult->save();
		return redirect()->route("examresults.index");
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
			$examresult = Examresults::find($id);

		$photourl1 = $examresult->photourl1;
	
			if($photourl1!="")
				{
					if(file_exists(public_path() .$photourl1))
					{
						unlink(public_path() . $photourl1);
					}
				}


		
		Examresults::destroy($id);

		return redirect()->route("examresults.index");
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
