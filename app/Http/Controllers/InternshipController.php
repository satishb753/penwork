<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Internship;

use Image;

use DB;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Response;

class InternshipController extends Controller
{
    //

    public function showInternship(Request $request)
    {
        $internships = DB::table('internships')->where('branches','like','%'.Auth::user()->branch.'%')->paginate(5);
        return view('pages.internship',['internships'=>$internships]);
    }

    public function fillInternship(Request $request){

        $this->validate($request, [
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $internship = new Internship();
        $internship->internship_title = $request['internship_title'];
        $internship->internship_category = $request['internship_category'];
        $internship->skills = $request['skills'];
        $internship->other_skills = $request['other_skills'];
        $internship->number_of_openings = $request['number_of_openings'];
        $internship->job_description = $request['job_description'];
        $internship->job_location = $request['job_location'];
        $internship->start_date = $request['start_date'];
        $internship->end_date = $request['end_date'];
        $internship->salary = $request['salary'];
        $internship->company_name = $request['company_name'];
        $internship->company_description = $request['company_description'];

        if(Input::hasFile('logo'))
        {
            $file = Input::file('logo');
            $image = Image::make($file);
            $filename = Auth::user()->id .'_'.bin2hex(openssl_random_pseudo_bytes(10)).'_'.$file->getClientOriginalName();
            $file->move(public_path().'/uploads/shared/internship' , $filename);
            Response::make($image->encode('jpeg'));

            $internship->image = $image;
            $internship->path = $filename;
        }

        $streams = ['civil','mechanical','electrical','electronics','computer'];
        $taken = array();

        foreach( $streams as $key => $stream)
        {
            if(Input::has($stream)){
                array_push($taken,$stream);
            }
        }

        $branches = implode(', ',$taken);
        $internship->branches = $branches;

        if($internship->save())
        {
            return redirect()->route('admin.panel');
//            return redirect()->route('admin.panel');
        }
        return view('welcome');
    }

}
