<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonials;
use DB;

use File;
use Input;

class TestimonialsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$testimonials = Testimonials::All();
    	
		return view("dashboard.testimonials.testimonialspannel")
		->with("testimonials", $testimonials);
	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view("dashboard.testimonials.testimonialcreate");

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function createtestimonial()
	{
		//
		return view("pages.testimonialcreate");

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
			'description' => 'required|max:1000',
			]);


		$testimonial = new Testimonials();
		$imagePath = public_path() . '/images/testimonials/';
		$lastid = DB::table('testimonials')->select('id')->orderBy('id', 'DESC')->first();
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
				$photourl1 = "/images/testimonials/" . $directory . '/photos/' .  $name;
			
			}

		}

		$testimonial->name = $request->input("name");
		$testimonial->positions = $request->input("positions");	
		$testimonial->description = $request->input("description");
		
		
		$testimonial->active = 0;
		if (Input::get('active') === '1'){$testimonial->active = 1;}

	
		$testimonial->photourl1 = $photourl1;
		
		$testimonial->save();

		if($request->input("description")==='submit')
		{
		return redirect()->route("testimonials.index");
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
		
		$testimonial = Testimonials::find($id);
		return view('dashboard.testimonials.testimonialedit')->with('testimonial',$testimonial);
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
			'description' => 'required|max:1000',
			
			]);
		
		$testimonial = Testimonials::find($id);
			
		$imagePath = public_path() . '/images/testimonials/';
	
		$directory = $id;


		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
	
		$photourl1 = $testimonial->photourl1;
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
				$photourl1 = "/images/testimonials/" . $directory . '/photos/' .  $name;
			 }

		}
	
	
		$testimonial->name = $request->input("name");
		$testimonial->positions = $request->input("positions");	
		$testimonial->description = $request->input("description");


		$testimonial->active = 0;
		if (Input::get('active') === ""){$testimonial->active = 1;}

		
		$testimonial->photourl1 = $photourl1;
		
		$testimonial->save();
		return redirect()->route("testimonials.index");
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
			$testimonial = Testimonials::find($id);

		$photourl1 = $testimonial->photourl1;
	
			if($photourl1!="")
				{
					if(file_exists(public_path() .$photourl1))
					{
						unlink(public_path() . $photourl1);
					}
				}


		
		Testimonials::destroy($id);

		return redirect()->route("testimonials.index");
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
