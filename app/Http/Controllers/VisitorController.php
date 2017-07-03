<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Visitors;
use Illuminate\Http\Response;

use App\Category;
use App\Courses;

use App\Http\Requests\ContactFormRequest;
use Mail;

use DB;

use File;
use Input;

class VisitorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$visitors = Visitors::All();
    	
		return view("dashboard.visitors.visitorspannel")
		->with("visitors", $visitors);
	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		// return view("dashboard.testimonials.testimonialcreate");

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function createvisitor($courseid)
	{
		//
		$categorys = Category::orderBy('id', 'desc')
								->take(7)
								->get();
		
		$courselists = Courses::orderBy('id', 'desc')
						->take(6)
						->get();

		$likes = Courses::All();

		$coursedetail = Courses::find($courseid);

		return view("pages.getbrochures")->with('categorys', $categorys)
										->with('courselists', $courselists)
										->with('likes', $likes)
										->with('coursedetail', $coursedetail);

	}
	public function seeksadmission($courseid)
	{
		//
		$categorys = Category::orderBy('id', 'desc')
								->take(7)
								->get();
		
		$courselists = Courses::orderBy('id', 'desc')
						->take(6)
						->get();

		$likes = Courses::All();

		$coursedetail = Courses::find($courseid);

		return view("pages.seeksadmission")->with('categorys', $categorys)
										->with('courselists', $courselists)
										->with('likes', $likes)
										->with('coursedetail', $coursedetail);

	}

	public function enrollprogram($courseid)
	{
		//
		$categorys = Category::orderBy('id', 'desc')
								->take(7)
								->get();
		
		$courselists = Courses::orderBy('id', 'desc')
						->take(6)
						->get();

		$likes = Courses::All();

		$coursedetail = Courses::find($courseid);

		return view("pages.application")->with('categorys', $categorys)
										->with('courselists', $courselists)
										->with('likes', $likes)
										->with('coursedetail', $coursedetail);

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		// var_dump("deie");
		// die();

		$this->validate($request,[
			
			'name' => 'required|max:255',
			'email' => 'required|max:255',
			'phone' => 'required|max:255',
			]);


		$visitor = new Visitors();
		
		$input = $request->all();
		
		
		

		$visitor->name = $request->input("name");
		$visitor->email = $request->input("email");	
		$visitor->phone = $request->input("phone");
		
		
		$visitor->active = 0;
		// if (Input::get('active') === '1'){$visitor->active = 1;}

	
		$visitor->like = $request->input("like");
		$visitor->type = $request->input("type");
		$visitor->message = $request->input("contentmessage");
		
		$visitor->save();

		$data = array(
        'name' => $request->input("name"),
        'email' => $request->input("email"),
        'phone' => $request->input("phone"),
        'like' => $request->input("like"),
        'type' => $request->input("type"),
        'messagecontent' => $request->input("contentmessage"),

    );

	
    Mail::send('emails.layoutmail', $data, function ($message) use ($data){



        $message->from('stieducontact@gmail.com', $data['email']);

        $message->to('stiedu@gmail.com')->subject('New Visitor Enquiry')
        										->replyTo($data['email']);

    });


    	// var_dump($request->input("submittype"));
    	// die();


    	if($request->input("submittype") === 'Get Brochures')
    	{
		
		$file = public_path(). "/doc/" . $request->input("categoryid") . ".pdf";
    	$headers = ['Content-Type: application/pdf'];
    	$newName =  $request->input("type").'.pdf';
    
		// var_dump($file);
		// die();

		 return response()->download($file, $newName, $headers);
		}
		elseif($request->input("submittype") === 'Get Application Form')
		{

			
		$file = public_path(). "/doc/application.pdf";
    	$headers = ['Content-Type: application/pdf'];
    	$newName = 'Applicationform'.'.pdf';
    
		

		 return response()->download($file, $newName, $headers);


		}
		else
		{
			return view('pages.acknoledgeform');
			
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
		
		// $testimonial = Testimonials::find($id);
		// return view('dashboard.testimonials.testimonialedit')->with('testimonial',$testimonial);
	}

	/**
	 * Update the specified resource in storage.
	 *testimonial
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		// $this->validate($request,[
		
		// 	'name' => 'required|max:255',
		// 	'positions' => 'required|max:255',
		// 	'description' => 'required|max:1000',
			
		// 	]);
		
		// $testimonial = Testimonials::find($id);
			
		// $imagePath = public_path() . '/images/testimonials/';
	
		// $directory = $id;


		// $input = $request->all();
		// $destinationPath = $imagePath . $directory . '/photos';
	
		// $photourl1 = $testimonial->photourl1;
		// // ini_set('post_max_size', '64M');
		// // ini_set('upload_max_filesize', '64M');
	
		// if(Input::file('photourl1')!="")
		// {
			

		// 	 if(Input::file('photourl1')->isValid())
		// 	 {
		// 		if($photourl1!="")
		// 		{
		// 			if(file_exists(public_path() .$photourl1))
		// 			{
		// 				unlink(public_path() . $photourl1);
		// 			}
		// 		}
					


		// 		$name =  time() . '-photo' . '.' . $input['photourl1']->getClientOriginalExtension();
		// 		File::exists($destinationPath) or File::makeDirectory($destinationPath, 0777, true, true);
		// 		Input::file('photourl1')->move($destinationPath, $name); // uploading file to given path
		// 		$photourl1 = "/images/testimonials/" . $directory . '/photos/' .  $name;
		// 	 }

		// }
	
	
		// $testimonial->name = $request->input("name");
		// $testimonial->positions = $request->input("positions");	
		// $testimonial->description = $request->input("description");


		// $testimonial->active = 0;
		// if (Input::get('active') === ""){$testimonial->active = 1;}

		
		// $testimonial->photourl1 = $photourl1;
		
		// $testimonial->save();
		// return redirect()->route("testimonials.index");
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
			$visitor = Visitors::find($id);

		

		
		Visitors::destroy($id);

		return redirect()->route("visitors.index");
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
