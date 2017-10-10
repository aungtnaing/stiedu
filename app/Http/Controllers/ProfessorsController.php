<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Professors;
use DB;

use File;
use Input;

class ProfessorsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$professors = Professors::All();
    	
		return view("dashboard.professors.professorspannel")
		->with("professors", $professors);
	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view("dashboard.professors.professorcreate");

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
			'positions' => 'required|max:255',
			'description' => 'required|max:10000',
			]);


		$professor = new Professors();
		$imagePath = public_path() . '/images/professors/';
		$lastid = DB::table('professors')->select('id')->orderBy('id', 'DESC')->first();
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
				$photourl1 = "/images/professors/" . $directory . '/photos/' .  $name;
			
			}

		}

		$professor->name = $request->input("name");
		$professor->positions = $request->input("positions");	
		$professor->description = $request->input("description");
		
		
		$professor->active = 0;
		if (Input::get('active') === '1'){$professor->active = 1;}

	
		$professor->photourl1 = $photourl1;
		
		$professor->save();
		return redirect()->route("professors.index");
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
		
		$professor = Professors::find($id);
		return view('dashboard.professors.professoredit')->with('professor',$professor);
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
		
			'name' => 'required|max:255',
			'positions' => 'required|max:255',
			'description' => 'required|max:10000',
			
			]);
		
		$professor = Professors::find($id);
			
		$imagePath = public_path() . '/images/professors/';
	
		$directory = $id;


		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
	
		$photourl1 = $professor->photourl1;
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
				$photourl1 = "/images/professors/" . $directory . '/photos/' .  $name;
			 }

		}
	
	
		$professor->name = $request->input("name");
		$professor->positions = $request->input("positions");	
		$professor->description = $request->input("description");


		$professor->active = 0;
		if (Input::get('active') === ""){$professor->active = 1;}

		
		$professor->photourl1 = $photourl1;
		
		$professor->save();
		return redirect()->route("professors.index");
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
			$professor = Professors::find($id);

		$photourl1 = $professor->photourl1;
	
			if($photourl1!="")
				{
					if(file_exists(public_path() .$photourl1))
					{
						unlink(public_path() . $photourl1);
					}
				}


		
		Professors::destroy($id);

		return redirect()->route("professors.index");
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
