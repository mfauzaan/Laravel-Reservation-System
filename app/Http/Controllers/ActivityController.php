<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use Session;
use Image;
use Storage;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
      $activity = Activity::all();

      return view('activities.index')->withActivity($activity);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required',
            'featured' => 'image'
      ));

      //store data
      $activity =new Activity;

      $activity->title = $request->title;
      $activity->body = $request->body;

      if ($request->hasFile('featured')) {
            $image = $request->file('featured');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
          Image::make($image)->resize(400, 300)->save($location);

            $activity->image = $filename;
          }

      $activity->save();

      Session::flash('success', 'The activity is Successfully Saved!');
      $activity = Activity::all();

      return view('activities.index')->withActivity($activity);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $activity = Activity::find($id);

      return view('activities.show')->withActivity($activity);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $activity = Activity::find($id);

      return view('activities.edit')->withActivity($activity);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      //store data
      $this->validate($request, array(
            'body' => 'required',
            'featured' =>'image'
      ));

      $activity = Activity::find($id);

      $activity->title = $request->input('title');
      $activity->body = $request->input('body');


      if($request->hasFile('featured')) {
        $image = $request->file('featured');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
          Image::make($image)->resize(400, 300)->save($location);
        $oldFilename =  $activity->image;

        $activity->image = $filename;

        Storage::delete($oldFilename);
      }

      //store data


      $activity->save();

      Session::flash('success', 'The activity is Successfully Saved!');

      $activity = Activity::all();

      return view('activities.index')->withActivity($activity);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activity = Activity::find($id);

        $activity->delete();
        Session::flash('danger', 'The Activity was Successfully Deleted!');
        return redirect()->route('activities.index');
    }
}
