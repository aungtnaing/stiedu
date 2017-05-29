<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use DB;

use App\Courses;
use App\Category;
use App\Professors;

use File;
use Input;
use Auth;

class CoursesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		
		if(Auth::user()->roleid==1 || Auth::user()->roleid==2 || Auth::user()->roleid==3)

		{
			$courses = Courses::All();
		}
		else
		{
		$courses = Courses::where('userid', Auth::user()->id)->get();
		}

		return view("dashboard.courses.coursespannel")
		->with("courses", $courses);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function coursedetails($courseid)
	{
		
		$coursedetail = Courses::find($courseid);
		$categorys = Category::orderBy('id', 'desc')
								->take(7)
								->get();
		
		$courselists = Courses::where('categoryid', $coursedetail->category->id)->get();
		

		return view("pages.coursedetails")
					->with('coursedetail',$coursedetail)
					->with('courselists',$courselists)
					->with('categorys',$categorys);
					

	}
		/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function coursedetailsmyanmar($courseid)
	{
		
		

	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
		
		$categorys = Category::orderBy('id', 'desc')->get();
		$professors = Professors::orderBy('id', 'desc')->get();
		return view("dashboard.courses.coursecreate")
				->with('professors', $professors)
				->with('categorys',$categorys);

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
			'name' => 'required|max:255',
			'aboutcourse' => 'required|max:1000',
			
			]);


		$course = new Courses();

		$imagePath = public_path() . '/images/courses/';
		$lastid = DB::table('courses')->select('id')->orderBy('id', 'DESC')->first();
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
				$photourl1 = "/images/courses/" . $directory . '/photos/' .  $name;

			
			}

		}

		$course->photourl1 = $photourl1;
		$course->name = $request->input("name");
		$course->categoryid = $request->input("category");
		$course->professorid = $request->input("professor");
		$course->userid = $request->user()->id;

		$course->aboutcourse = $request->input("aboutcourse");
		$course->whatlearn = $request->input("whatlearn");
		
		$course->startdate = $request->input("startdate");
		$course->duration = $request->input("duration");
		$course->classduration = $request->input("classduration");
		$course->institution = $request->input("institution");
		$course->seatsavailable = $request->input("seatsavailable");
		$course->level = $request->input("level");
		$course->rate = $request->input("rate");

		if (Input::get('active') === '1'){$course->active = 1;}
		
		$course->save();
		
		return redirect()->route("courses.index");
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
		
		$course = Courses::find($id);
		$categorys = Category::orderBy('id', 'desc')->get();
		$professors = Professors::orderBy('id', 'desc')->get();

		return view('dashboard.courses.courseedit')
				->with('professors', $professors)
				->with('course', $course)
				->with('categorys',$categorys);
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
			'aboutcourse' => 'required|max:1000',
			
			]);


		$course = Courses::find($id);

		$imagePath = public_path() . '/images/courses/';
		$directory = $id;

		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
		
		$photourl1 = $course->photourl1;

		
		if(Input::file('photourl1')!="")
		{
			if(Input::file('photourl1')->isValid())
			{
			
				if($photourl1!="")
				{
					if(file_exists(public_path().$photourl1))
					{
						unlink(public_path() . $photourl1);
					}
				}



				$name =  time()  . '-photo' . '.' . $input['photourl1']->getClientOriginalExtension();
				Input::file('photourl1')->move($destinationPath, $name); // uploading file to given path
				$photourl1 = "/images/courses/" . $directory . '/photos/' .  $name;
			
			}

		}


		

		$course->photourl1 = $photourl1;
		$course->name = $request->input("name");
		$course->categoryid = $request->input("category");
		$course->professorid = $request->input("professor");
		$course->userid = $request->user()->id;

		$course->aboutcourse = $request->input("aboutcourse");
		$course->whatlearn = $request->input("whatlearn");
		
		$course->startdate = $request->input("startdate");
		$course->duration = $request->input("duration");
		$course->classduration = $request->input("classduration");
		$course->institution = $request->input("institution");
		$course->seatsavailable = $request->input("seatsavailable");
		$course->level = $request->input("level");
		$course->rate = $request->input("rate");
		

		$course->active = 0;
		if (Input::get('active') === ""){$course->active = 1;}

		$course->save();
				return redirect()->route("courses.index");
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
		$course = Courses::find($id);
		
		if($course->photourl1!="")
		{
			if(file_exists(public_path() .$course->photourl1))
			{
				unlink(public_path() . $course->photourl1);
			}
		}

		Courses::destroy($id);

		return redirect()->route("courses.index");
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
