@extends('home')

@section('contents')
    <div style="margin-left:35px;">
        <div style="height:80px;background-color:f1f1f1;border-radius:30px;text-align:center;">
            <h4 style="padding-top:30px;font-family:roman;font-size:1.7em;">Internship</h4>
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

        </style>



        @foreach($internships as $internship)
        <div class="row">

            <div class="col-md-9">

                    <table class="table-striped table-bordered" id="tbl">

                        <tbody style="font-family:time;">
                        <tr style="background-color:rgb(223,240,216)">
                            <td class="col-md-4"><h5 style="font-weight:bold;">Internship Title</h5></td>
                            <td class="col-md-8"><h5>{{ $internship->internship_title }}</h5></td>
                        </tr>
                        <tr style="background-color:rgb(252,248,227)">
                            <td class="col-md-6"><h5 style="font-weight:bold;">Eligible Branch/Stream</h5></td>
                            <td class="col-md-6"><h5>{{ $internship->internship_category }}</h5></td>
                        </tr>
                        <tr style="background-color:rgb(242,222,222)">
                            <td class="col-md-6"><h5 style="font-weight:bold;">Skills</h5></td>
                            <td class="col-md-6"><h5>{{ $internship->skills }}</h5></td>
                        </tr>
                        <tr style="background-color:rgb(217,237,247)">
                            <td class="col-md-6"><h5 style="font-weight:bold;">Other Skills</h5></td>
                            <td class="col-md-6"><h5>{{ $internship->other_skills }}</h5></td>
                        </tr>
                        <tr style="background-color:#c6c8e0">
                            <td class="col-md-6"><h5 style="font-weight:bold;">Number of Openings</h5></td>
                            <td class="col-md-6"><h5>{{ $internship->number_of_openings }}</h5></td>
                        </tr>
                        <tr style="background-color:#c6e0de">
                            <td class="col-md-6"><h5 style="font-weight:bold;">Job Description</h5></td>
                            <td class="col-md-6"><h5>{{ $internship->job_description }}</h5></td>
                        </tr>
                        <tr style="background-color:#c8c1c1">
                            <td class="col-md-6"><h5 style="font-weight:bold;">Job Location</h5></td>
                            <td class="col-md-6"><h5>{{ $internship->job_location }}</h5></td>
                        </tr>
                        <tr style="background-color:rgb(223,240,216)">
                            <td class="col-md-6"><h5 style="font-weight:bold;">Start Date</h5></td>
                            <td class="col-md-6"><h5>{{ $internship->start_date }}</h5></td>
                        </tr>
                        <tr style="background-color:rgb(252,248,227)">
                            <td class="col-md-6"><h5 style="font-weight:bold;">End Date</h5></td>
                            <td class="col-md-6"><h5>{{ $internship->end_date }}</h5></td>
                        </tr>
                        <tr style="background-color:rgb(242,222,222)">
                            <td class="col-md-6"><h5 style="font-weight:bold;">Salary</h5></td>
                            <td class="col-md-6"><h5>{{ $internship->salary }}</h5></td>
                        </tr>
                        <tr style="background-color:rgb(217,237,247)">
                            <td class="col-md-6"><h5 style="font-weight:bold;">Company Name</h5></td>
                            <td class="col-md-6"><h5>{{ $internship->company_name }}</h5></td>
                        </tr>
                        <tr style="background-color:#c6c8e0">
                            <td class="col-md-6"><h5 style="font-weight:bold;">Company Description</h5></td>
                            <td class="col-md-6"><h5>{{ $internship->company_description }}</h5></td>
                        </tr>
                        </tbody>

                    </table>

                <br>
                <div>
                    <button class="btn btn-info" style="margin:auto;display:block;">Read More</button>
                </div>

            </div>

            <div class="col-md-3">
                <img src="{{ URL::to('uploads/shared/internship'). '/' . $internship->path }}" style="width:200px;height:200px;">
            </div>

        </div>

            <hr style="border-color:a1a1a1;">

        <br>
        <br>

        @endforeach
        <div style="margin-left:30%;display:block;">
            {{ $internships->links() }}
        </div>

        <br>
        <br>
    </div>
@endsection


