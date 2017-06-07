<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use DB;

use App\Events;
use App\Category;
use App\Professors;

use File;
use Input;
use Auth;

class EventsController extends Controller {

	/*
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		
		if(Auth::user()->roleid==1 || Auth::user()->roleid==2 || Auth::user()->roleid==3)

		{
			$events = Events::All();
		}
		else
		{
		$events = Events::where('userid', Auth::user()->id)->get();
		}

		return view("dashboard.events.eventspannel")
		->with("events", $events);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function eventdetails($eventid)
	{


		
		$eventdetail = Events::find($eventid);


		$categorys = Category::orderBy('id', 'desc')
								->take(7)
								->get();
		
		$eventlists = Events::where('active', 1)
								->orderBy('id', 'desc')
								->take(5)
								->get();
		
		return view("pages.eventdetail")
					->with('eventdetail',$eventdetail)
					->with('eventlists',$eventlists)
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
		return view("dashboard.events.eventcreate")
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
			'aboutevent' => 'required|max:2000',
			
			]);


		$event = new Events();

		$imagePath = public_path() . '/images/events/';
		$lastid = DB::table('events')->select('id')->orderBy('id', 'DESC')->first();
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
				$photourl1 = "/images/events/" . $directory . '/photos/' .  $name;

			
			}

		}

		$event->photourl1 = $photourl1;
		$event->name = $request->input("name");

		$event->type = $request->input("type");	
		$event->youtubelink = $request->input("youtubelink");
		
		if($request->input("firstspeakerid") != 0)
		{ $event->firstspeakerid = $request->input("firstspeakerid"); }
		
		if($request->input("secondspeakerid") != 0)
		{ $event->secondspeakerid = $request->input("secondspeakerid"); }
		if($request->input("thirdspeakerid") != 0)
		{ $event->thirdspeakerid = $request->input("thirdspeakerid"); }
		
		if($request->input("fourthspeakerid") != 0)
		{ $event->fourthspeakerid = $request->input("fourthspeakerid");
		}

		if($request->input("fifthspeakerid") != 0)
		{ $event->fifthspeakerid = $request->input("fifthspeakerid");
		}
		
		$event->userid = $request->user()->id;

		$event->aboutevent = $request->input("aboutevent");
		$event->startdate = $request->input("startdate");
		$event->enddate = $request->input("enddate");
		$event->address = $request->input("address");
		

		if (Input::get('active') === '1'){$event->active = 1;}
		
		$event->save();
		
		return redirect()->route("events.index");
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
		
		$event = Events::find($id);
		$categorys = Category::orderBy('id', 'desc')->get();
		$professors = Professors::orderBy('id', 'desc')->get();

		return view('dashboard.events.eventedit')
				->with('professors', $professors)
				->with('event', $event)
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
			'aboutevent' => 'required|max:2000',
			
			]);


		$event = Events::find($id);

		$imagePath = public_path() . '/images/events/';
		$directory = $id;

		$input = $request->all();
		$destinationPath = $imagePath . $directory . '/photos';
		
		$photourl1 = $event->photourl1;

		
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
				$photourl1 = "/images/events/" . $directory . '/photos/' .  $name;
			
			}

		}


		

		$event->photourl1 = $photourl1;
		$event->name = $request->input("name");

		$event->type = $request->input("type");	
		$event->youtubelink = $request->input("youtubelink");
		
		if($request->input("firstspeakerid") != 0)
		{ $event->firstspeakerid = $request->input("firstspeakerid"); }
		
		if($request->input("secondspeakerid") != 0)
		{ $event->secondspeakerid = $request->input("secondspeakerid"); }
		if($request->input("thirdspeakerid") != 0)
		{ $event->thirdspeakerid = $request->input("thirdspeakerid"); }
		
		if($request->input("fourthspeakerid") != 0)
		{ $event->fourthspeakerid = $request->input("fourthspeakerid");
		}

		if($request->input("fifthspeakerid") != 0)
		{ $event->fifthspeakerid = $request->input("fifthspeakerid");
		}
		$event->userid = $request->user()->id;

		$event->aboutevent = $request->input("aboutevent");
		$event->startdate = $request->input("startdate");
		$event->enddate = $request->input("enddate");
		$event->address = $request->input("address");
		

		$event->active = 0;
		if (Input::get('active') === ""){$event->active = 1;}

		$event->save();
				return redirect()->route("events.index");
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
		$event = Events::find($id);
		
		if($event->photourl1!="")
		{
			if(file_exists(public_path() .$event->photourl1))
			{
				unlink(public_path() . $event->photourl1);
			}
		}

		Events::destroy($id);

		return redirect()->route("events.index");
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
