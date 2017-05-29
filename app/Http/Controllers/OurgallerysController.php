<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ourgallerys;
use DB;

use File;
use Input;

class OurgallerysController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$ourgallerys = Ourgallerys::All();
    	
		return view("dashboard.ourgallerys.ourgalleryspannel")
		->with("ourgallerys", $ourgallerys);
	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view("dashboard.ourgallerys.ourgallerycreate");

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
			
			]);


		$ourgallery = new Ourgallerys();
		$imagePath = public_path() . '/images/ourgallerys/';
		$lastid = DB::table('ourgallerys')->select('id')->orderBy('id', 'DESC')->first();
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
				$photourl1 = "/images/ourgallerys/" . $directory . '/photos/' .  $name;
			
			}

		}

		$ourgallery->name = $request->input("name");
		$ourgallery->type = $request->input("type");	
		$ourgallery->youtubelink = $request->input("youtubelink");
		
		
		$ourgallery->active = 0;
		if (Input::get('active') === '1'){$ourgallery->active = 1;}

	
		$ourgallery->photourl1 = $photourl1;
		
		$ourgallery->save();
		return redirect()->route("ourgallerys.index");
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
		
		$ourgallery = Ourgallerys::find($id);
		return view('dashboard.ourgallerys.ourgalleryedit')->with('ourgallery',$ourgallery);
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
			
			
			]);
		
		$ourgallery = Ourgallerys::find($id);
			
		$imagePath = public_path() . '/images/ourgallerys/';
	
		$directory = $id;


		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
	
		$photourl1 = $ourgallery->photourl1;
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
				$photourl1 = "/images/ourgallerys/" . $directory . '/photos/' .  $name;
			 }

		}
	
	
		$ourgallery->name = $request->input("name");
		$ourgallery->type = $request->input("type");	
		$ourgallery->youtubelink = $request->input("youtubelink");


		$ourgallery->active = 0;
		if (Input::get('active') === ""){$ourgallery->active = 1;}

		
		$ourgallery->photourl1 = $photourl1;
		
		$ourgallery->save();
		return redirect()->route("ourgallerys.index");
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
			$ourgallery = Ourgallerys::find($id);

		$photourl1 = $ourgallery->photourl1;
	
			if($photourl1!="")
				{
					if(file_exists(public_path() .$photourl1))
					{
						unlink(public_path() . $photourl1);
					}
				}


		
		Ourgallerys::destroy($id);

		return redirect()->route("ourgallerys.index");
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
