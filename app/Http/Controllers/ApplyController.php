<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Applys;
use Illuminate\Http\Response;

use App\Category;
use App\Courses;

use App\Http\Requests\ContactFormRequest;
use Mail;

use DB;

use File;
use Input;

class ApplyController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$applys = Applys::All();
    	
		return view("dashboard.applys.applyspannel")
		->with("applys", $applys);
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


		$apply = new Applys();
		
		$input = $request->all();
		
		
		

		$apply->name = $request->input("name");
		$apply->email = $request->input("email");	
		$apply->phone = $request->input("phone");
		
		
		$apply->active = 0;
	
		
		$apply->save();

		$data = array(
        'name' => $request->input("name"),
        'email' => $request->input("email"),
        'phone' => $request->input("phone"),
   

    );

	
    Mail::send('emails.layoutapplymail', $data, function ($message) use ($data){



        $message->from('stieducontact@gmail.com', $data['email']);

        $message->to('stiedu@gmail.com')->subject('New Visitor Enquiry')
        										->replyTo($data['email']);

    });

    


    	// var_dump($request->input("submittype"));
    	// die();


    
			return view('pages.acknoledgeform');
			
		

		

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
		// $visitor = Visitors::find($id);
		// 	if($request->input("status")==="read")
		// 	{
		// 		$visitor->active = 1;
		// 	}
			
		// 	$visitor->save();
			
		// 		return redirect()->route("dashboard.index");
			
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
			

		

		
		Applys::destroy($id);

		return redirect()->route("applys.index");
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
