<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Image;

use DB;

use App\Conference;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\Auth;

class ConferenceController extends Controller
{
    //
    public function showConference(Request $request)
    {
        $conferences = DB::table('conferences')->where('branches','like','%'.Auth::user()->branch.'%')->paginate(10);
        return view('pages.conference',['conferences'=>$conferences]);
    }

    public function fillConference(Request $request){

        $conference = new Conference();
        $conference->conference_title = $request['conference_title'];
        $conference->area_of_interest = $request['area_of_interest'];
        $conference->deadline = $request['deadline'];
        $conference->organised_by = $request['organised_by'];
        $conference->date = $request['date'];
        $conference->venue = $request['venue'];
        $conference->about_event = $request['about_event'];
        $conference->keynote_speakers = $request['keynote_speakers'];
        $conference->other_details = $request['other_details'];
        $conference->contact_email = $request['contact_email'];
        $conference->website = $request['website'];

        $streams = ['civil','mechanical','electrical','electronics','computer'];
        $taken = array();

        foreach( $streams as $key => $stream)
        {
            if(Input::has($stream)){
                array_push($taken,$stream);
            }
        }

        $branches = implode(', ',$taken);
        $conference->branches = $branches;

        if($conference->save())
        {
            return redirect()->route('admin.panel');
        }

        return redirect()->route('home');
    }

}
