<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Session;
use Image;
use Storage;

class ContactController extends Controller
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
      $contacts = Contact::all();

      return view('contacts.index')->withContacts($contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //validate
      $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required'
      ));

      //store data
      $contacts =new Contact;

      $contacts->title = $request->title;
      $contacts->body = $request->body;

      $contacts->save();

      Session::flash('success', 'The Blog post is Successfully Saved!');

      return redirect()->route('contacts.index', $contacts->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $contacts = Contact::find($id);
      return view('contacts.show')->withContact($contacts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $contacts = Contact::find($id);
      return view('contacts.edit')->withContact($contacts);
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
      //validate
      $this->validate($request, array(
            'body' => 'required'
      ));

      //store data
      $contacts = Contact::find($id);

      $contacts->body = $request->input('body');

      $contacts->save();

      Session::flash('success', 'The Blog post is Successfully Saved!');

      return redirect()->route('contacts.index', $contacts->id);

      //store data

      $post->body = $request->input('body');

      if($request->hasFile('featured')) {
        $image = $request->file('featured');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);
        $oldFilename =  $post->image;

        $activity->image = $filename;

        Storage::delete($oldFilename);

    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
