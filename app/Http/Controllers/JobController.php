<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Job;

use Image;

use DB;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Response;

class JobController extends Controller
{
    //

    public function showJob(Request $request)
    {
        $jobs = DB::table('jobs')->where('branches','like','%'.Auth::user()->branch.'%')->paginate(5);
        return view('pages.job',['jobs'=>$jobs]);
    }

    public function fillJob(Request $request)
    {

        $this->validate($request, [
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $job = new Job();
        $job->job_title = $request['job_title'];
        $job->qualification = $request['qualification'];
        $job->designation = $request['designation'];
        $job->key_skills = $request['key_skills'];
        $job->experience = $request['experience'];
        $job->job_description = $request['job_description'];
        $job->job_location = $request['job_location'];
        $job->experience = $request['experience'];
        $job->end_date = $request['end_date'];
        $job->salary = $request['salary'];
        $job->company_name = $request['company_name'];
        $job->company_details = $request['company_description'];

        if(Input::hasFile('logo'))
        {
            $file = Input::file('logo');
            $image = Image::make($file);
            $filename = Auth::user()->id . '_' . bin2hex(openssl_random_pseudo_bytes(10)).'_'.$file->getClientOriginalName();
            $file->move(public_path().'/uploads/shared/job' , $filename);
            Response::make($image->encode('jpeg'));

            $job->image = $image;
            $job->path = $filename;
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
        $job->branches = $branches;

        if($job->save())
        {
            return redirect()->route('admin.panel');
        }

    }

}
