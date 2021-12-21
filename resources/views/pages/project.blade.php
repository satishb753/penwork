@extends('home')

@section('contents')
    <div style="margin-left:35px;">
        <div style="height:80px;background-color:f1f1f1;border-radius:30px;text-align:center;">
            <h4 style="padding-top:30px;font-family:roman;font-size:1.7em;">Projects</h4>
        </div>
        <br>
        <br>

        <style>
            td > h4 {
                /*text-align : center;*/
            }
            .table tr{
                height:60px;
                overflow:hidden;
            }

            #tbl{
                table-layout:fixed;
                overflow:hidden;
                border:1px #ccd9ff;
                width:100%;
                border-left:none;
                border-right:none;
            }

            .col-md-4 h5{
                font-weight:bold;
            }


        </style>

    @foreach($projects as $project)
            <div class="row">

                <div class="col-md-9">

                    <table class="table-striped table-bordered" id="tbl">

                    <tbody style="font-family:time;">
                    <tr>
                        <td class="col-md-4"><h5>Project Title</h5></td>
                        <td class="col-md-8"><h5>{{ $project->project_title }}</h5></td>
                    </tr>
                    <tr>
                        <td class="col-md-4"><h5>Project Category</h5></td>
                        <td class="col-md-8"><h5>{{ $project->project_category }}</h5></td>
                    </tr>
                    <tr>
                        <td class="col-md-4"><h5>Skills</h5></td>
                        <td class="col-md-8"><h5>{{ $project->skills }}</h5></td>
                    </tr>
                    <tr>
                        <td class="col-md-4"><h5>Other Skills</h5></td>
                        <td class="col-md-8"><h5>{{ $project->other_skills }}</h5></td>
                    </tr>
                    <tr>
                        <td class="col-md-4"><h5>Openings</h5></td>
                        <td class="col-md-8"><h5>{{ $project->number_of_openings }}</h5></td>
                    </tr>
                    <tr>
                        <td class="col-md-4"><h5>Job Description</h5></td>
                        <td class="col-md-8"><h5>{{ $project->job_description }}</h5></td>
                    </tr>
                    <tr>
                        <td class="col-md-4"><h5>Job Location</h5></td>
                        <td class="col-md-8"><h5>{{ $project->job_location }}</h5></td>
                    </tr>
                    <tr>
                        <td class="col-md-4"><h5>Start Date</h5></td>
                        <td class="col-md-8"><h5>{{ $project->start_date }}</h5></td>
                    </tr>
                    <tr>
                        <td class="col-md-4"><h5>End Date</h5></td>
                        <td class="col-md-8"><h5>{{ $project->end_date }}</h5></td>
                    </tr>
                    <tr>
                        <td class="col-md-4"><h5>Salary</h5></td>
                        <td class="col-md-8"><h5>{{ $project->salary }}</h5></td>
                    </tr>
                    <tr>
                        <td class="col-md-4"><h5>Company Name</h5></td>
                        <td class="col-md-8"><h5>{{ $project->company_name }}</h5></td>
                    </tr>
                    <tr>
                        <td class="col-md-4"><h5>Company Description</h5></td>
                        <td class="col-md-8"><h5>{{ $project->company_description }}</h5></td>
                    </tr>
                    </tbody>
                </table>

                    <br>
                    <div>
                        <button class="btn btn-info" style="margin:auto;display:block;">Read More</button>
                    </div>
            </div>

            <div class="col-md-3">
                <img src="{{ URL::to('uploads/shared/project'). '/' . $project->path }}" style="width:200px;height:200px;">
            </div>
        </div>

        <hr style="border-color:a1a1a1;">
        <br>
        <br>

    @endforeach

    <div style="margin-left:30%;display:block;">
        {{ $projects->links() }}
    </div>


</div>

@endsection