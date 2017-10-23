<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\contact;
use App\Activity;
use Mail;
use Session;
use App\Booking;

class PagesController extends Controller
{
    public function getIndex(){
        $posts = Post::orderBy('id') ->get();
        $contacts = Contact::orderBy('id') ->get();
        $activities = Activity::orderBy('id') ->get();

        return view('pages.main')->withPosts($posts)->withContact($contacts)->withActivity($activities);
    }

    public function postIndex(Request $request) {
          $this->validate($request, [
          'first' => 'required',
          'last' => 'required',
    			'email' => 'required|email',
          'phone' => 'required',
    			'arrival' => 'min:3',
          'departure' => 'min:3',
          'adult' => 'required',
          'room' => 'required',
          'lunch' => 'required',
          ]);


      		$data = array(
            'first' => $request->first,
            'last' => $request->last,
      			'email' => $request->email,
            'phone' => $request->phone,
      			'arrival' => $request->arrival,
            'departure' => $request->departure,
            'adult'=> $request->adult,
            'child'=> $request->child,
            'room'=> $request->room,
            'lunch'=> $request->lunch,
      			'bodyMessage' => $request->bodyMessage
      			);

      		Mail::send('emails.booking', $data, function($message) use ($data){
      			$message->from($data['email']);
      			$message->to('hello@devmarketer.io');
      			$message->subject('You have a booking Request');
      		});

          //store data
          $booking =new Booking;

          $booking->first = $request->first;
          $booking->last = $request->last;
          $booking->email = $request->email;
          $booking->phone = $request->phone;
          $booking->arrival = $request->arrival;
          $booking->departure = $request->departure;
          $booking->adult = $request->adult;
          $booking->child = $request->child;
          $booking->room = $request->room;
          $booking->lunch = $request->lunch;
          $booking->bodyMessage = $request->bodyMessage;

          $booking->save();

          Session::flash('book', 'The Blog post is Successfully Saved!');

    		return redirect('/');



    }

    public function getWelcome() {
      return view ('welcome');
    }

    public function getBook() {
      return view ('emails.booking');
    }




}
