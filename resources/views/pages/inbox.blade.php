<div style="margin-left:20px;">
    <div style="height:80px;background-color:f1f1f1;border-radius:30px;text-align:center;">
        <h4 style="padding-top:30px;">Inbox</h4>
    </div>
    <br>
    <br>

    <style>
        tr > td {
            /*text-align : center;*/
            height:20px;
        }
    </style>

<!--    --><?php
//        $sections = array('Internship','Project','Job Opening','Conference','Publication');
//
//        $limit = 2;
////        $internships = DB::table('internships')->orderBy('created_at','desc')->pluck('internship_title');
////        $projects = DB::table('projects')->orderBy('created_at','desc')->pluck('project_title');
////        $jobs = DB::table('jobs')->orderBy('created_at','desc')->pluck('job_title');
////        $conferences = DB::table('conferences')->orderBy('created_at','desc')->pluck('conference_title');
////        $publications = DB::table('publications')->orderBy('created_at','desc')->pluck('publication_title');
//
//    ?>


    <div class="row">
        <div class="col-md-12">
            <table class="table-striped" style="width:100%;border-left:none;border-right:none;border:1px #ccd9ff;" border="1" rules="rows">

                <tbody style="font-family:serif;overflow:hidden;">

                {{--@foreach($internships as $key=>$internship)--}}
                    {{--<tr>--}}
                        {{--<td class="col-md-2"><h4>Internship</h4></td>--}}
                        {{--<td class="col-md-10"><h4>{{ $internship->internship_title }}</h4></td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td class="col-md-2"><h4>Project</h4></td>--}}
                        {{--<td class="col-md-10"><h4>{{ $projects[$key]->project_title }}</h4></td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td class="col-md-2"><h4>Job Opening</h4></td>--}}
                        {{--<td class="col-md-10"><h4>{{ $jobs[$key]->job_title }}</h4></td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td class="col-md-2"><h4>Conference</h4></td>--}}
                        {{--<td class="col-md-10"><h4>{{ $conferences[$key]->conference_title }}</h4></td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td class="col-md-2"><h4>Publication</h4></td>--}}
                        {{--<td class="col-md-10"><h4>{{ $publications[$key]->publication_title }}</h4></td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}

                </tbody>

            </table>
        </div>
        {{--<div class="col-md-4">--}}
        {{--<img src="{{ URL::to('uploads/shared/job'). '/' . $job->path }}" style="width:200px;height:200px;">--}}
        {{--</div>--}}

    </div>

    <br>
    <br>


</div>