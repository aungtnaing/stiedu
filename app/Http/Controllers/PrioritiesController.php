<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Priorities;
use DB;

// use Intervention\Image\ImageManager;
// use Intervention\Image\ImageManagerStatic as Image;
// use File;

class PrioritiesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{


		$priorities = Priorities::All();
    		
         return view("dashboard.priorities.prioritiespannel")
            ->with("priorities", $priorities);

           
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		
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
		$prioritie = Priorities::find($id);
		return view('dashboard.priorities.prioritieedit')->with('prioritie',$prioritie);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//

		$this->validate($request,[
			'name' => 'required',
			'value' => 'required',
		
			]);


			$priorities = Priorities::find($id);
			$priorities->name = $request->input("name");
			$priorities->value = $request->input("value");

			$priorities->save();

			
			return redirect()->route("priorities.index");
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
	}



}
