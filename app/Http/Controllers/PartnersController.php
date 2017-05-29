<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Partners;
use DB;

use File;
use Input;

class PartnersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$partners = Partners::All();
    	
		return view("dashboard.partners.partnerspannel")
		->with("partners", $partners);
	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view("dashboard.partners.partnercreate");

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


		$partner = new Partners();
		$imagePath = public_path() . '/images/partners/';
		$lastid = DB::table('partners')->select('id')->orderBy('id', 'DESC')->first();
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
				$photourl1 = "/images/partners/" . $directory . '/photos/' .  $name;
			
			}

		}

		$partner->name = $request->input("name");
		$partner->urllink = $request->input("urllink");	
		$partner->description = $request->input("description");
		
		
		$partner->active = 0;
		if (Input::get('active') === '1'){$partner->active = 1;}

	
		$partner->photourl1 = $photourl1;
		
		$partner->save();
		return redirect()->route("partners.index");
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
		
		$partner = Partners::find($id);
		return view('dashboard.partners.partneredit')->with('partner',$partner);
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
		
		$partner = Partners::find($id);
			
		$imagePath = public_path() . '/images/partners/';
	
		$directory = $id;


		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
	
		$photourl1 = $partner->photourl1;
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
				$photourl1 = "/images/partners/" . $directory . '/photos/' .  $name;
			 }

		}
	
	
		$partner->name = $request->input("name");
		$partner->urllink = $request->input("urllink");	
		$partner->description = $request->input("description");


		$partner->active = 0;
		if (Input::get('active') === ""){$partner->active = 1;}

		
		$partner->photourl1 = $photourl1;
		
		$partner->save();
		return redirect()->route("partners.index");
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
			$partner = Partners::find($id);

		$photourl1 = $partner->photourl1;
	
			if($photourl1!="")
				{
					if(file_exists(public_path() .$photourl1))
					{
						unlink(public_path() . $photourl1);
					}
				}


		
		Partners::destroy($id);

		return redirect()->route("partners.index");
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
