<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Project;

use Image;

use DB;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Response;

class ProjectController extends Controller
{
    //

    public function showProject(Request $request)
    {
        $projects = DB::table('projects')->where('branches','like','%'.Auth::user()->branch.'%')->paginate(5);
        return view('pages.project',['projects'=>$projects]);
    }

    public function fillProject(Request $request){

        $this->validate($request, [
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $project = new Project();
        $project->project_title = $request['project_title'];
        $project->project_category = $request['project_category'];
        $project->skills = $request['skills'];
        $project->other_skills = $request['other_skills'];
        $project->number_of_openings = $request['number_of_openings'];
        $project->job_description = $request['job_description'];
        $project->job_location = $request['job_location'];
        $project->start_date = $request['start_date'];
        $project->end_date = $request['end_date'];
        $project->salary = $request['salary'];
        $project->company_name = $request['company_name'];
        $project->company_description = $request['company_description'];

        if(Input::hasFile('logo'))
        {
            $file = Input::file('logo');
            $image = Image::make($file);
            $filename = Auth::user()->id .'_'.bin2hex(openssl_random_pseudo_bytes(10)).'_'.$file->getClientOriginalName();
            $file->move(public_path().'/uploads/shared/project' , $filename);
            Response::make($image->encode('jpeg'));

            $project->image = $image;
            $project->path = $filename;
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
        $project->branches = $branches;

        if($project->save())
        {
            return redirect()->route('admin.panel');
        }
        else return redirect()->route('home');

    }
}
