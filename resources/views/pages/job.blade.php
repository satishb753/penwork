@extends('home')

@section('contents')
    <div style="margin-left:35px;">
        <div style="height:80px;background-color:f1f1f1;border-radius:30px;text-align:center;">
            <h4 style="padding-top:30px;font-family:roman;font-size:1.7em;">Job Openings</h4>
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

            td{
                font-family:time;
            }


        </style>

    <?php

        $col_md_x = "col-md-2";
        $col_md_y = "col-md-9";

        $glyphicons = array('asterisk', 'flag', 'certificate', 'thumbs-up',
                'hand-right', 'paperclip', 'flash', 'record', 'send', 'cd', 'apple', 'hourglass', 'flash');

    ?>

    @foreach($jobs as $job)

            <div>

                <div>
                    <span class="glyphicon glyphicon-{{ $glyphicons[rand(0,12)] }}" style="padding-left:10px;"></span>
                    <a href="" style="padding-left:4px;" target="_blank">
                        <font size="4"><strong>{{ $job->job_title }}</strong></font>
                    </a>
                    <br>
                    <a href="" style="padding-left:32px;" target="_blank">
                        <font size="2">Tata Consultancy Services</font>
                    </a>
                    <div style="height:10px;"></div>
                    <table style="margin-left:34px;width:70%">
                        <tbody>
                            <tr>
                                <td style="width:100px;">Experience</td>
                                <td>{{ $job->experience }}</td>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td>{{ $job->job_location }}</td>
                            </tr>
                            <tr>
                                <td>Keyskills</td>
                                <td>{{ $job->job_description }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <div>
                        <img style="margin-left:30px;display:block" width="100" height="30" src="{{ URL::to('imgs/apply_now_button.png') }}">
                    </div>

                </div>

            </div>

        <hr style="border-color:a1a1a1;">
        <br>
    @endforeach

        <div style="margin-left:30%;display:block;">
            {{ $jobs->links() }}
        </div>
</div>

@endsection