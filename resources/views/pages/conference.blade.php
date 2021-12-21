@extends('home')

@section('contents')
    <div style="margin-left:35px;">
        <div style="height:80px;background-color:f1f1f1;border-radius:30px;text-align:center;">
            <h4 style="padding-top:30px;font-family:roman;font-size:1.7em;">Conference</h4>
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


            <div class="row">

                <div class="col-md-12">

                    <table class="table-striped" id="tbl" border="2" >

                    <thead>
                        <tr style="background-color:#dff0d8;">
                            <td class="col-md-7"><h4 style="font-weight:bold;">Conference Title</h4></td>
                            <td class="col-md-2"><h4 style="font-weight:bold;">Organized By / Venue</h4></td>
                            <td class="col-md-1"><h4 style="font-weight:bold;">Date</h4></td>
                            <td class="col-md-1"><h4 style="font-weight:bold;">Link</h4></td>
                        </tr>
                    </thead>

                    <tbody style="font-family:time;">

                        @foreach($conferences as $key => $conference)
                        <tr style="background-color:fcf8e3;">

                            <td class="col-md-6"><h5>{{ $conference->conference_title }}</h5></td>

                            <td class="col-md-3"><h5>{{ $conference->organised_by }}</h5></td>

                            <td class="col-md-2" style="text-align:center;"><h5>{{ $conference->date }}</h5></td>

                            <td class="col-md-1"><h5><a href="{{ $conference->website }}">Visit</a></h5></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                <hr>
            {{--<div class="col-md-3">--}}
                {{--<button class="btn btn-info" style="margin:auto;display:block;">Read More</button>--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
                {{--<img src="{{ URL::to('uploads/shared/job'). '/' . $job->path }}" style="width:200px;height:200px;">--}}
            {{--</div>--}}
        </div>

        <div style="margin-left:30%;margin-top:100px;display:block;">
            {{ $conferences->links() }}
        </div>

        {{--<hr style="border-$conferencer:a1a1a1;">--}}
        <br>
        <br>


</div>

@endsection

{{--<tr>--}}
{{--<td class="col-md-6"><h4>Venue</h4></td>--}}
{{--<td class="col-md-6"><h4>{{ $conference->venue }}</h4></td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td class="col-md-6"><h4>Country</h4></td>--}}
{{--<td class="col-md-6"><h4>{{ $conference->country }}</h4></td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td class="col-md-6"><h4>About Event</h4></td>--}}
{{--<td class="col-md-6"><h4>{{ $conference->about_event }}</h4></td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td class="col-md-6"><h4>Keynote Speakers</h4></td>--}}
{{--<td class="col-md-6"><h4>{{ $conference->keynote_speakers }}</h4></td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td class="col-md-6"><h4>Other Details</h4></td>--}}
{{--<td class="col-md-6"><h4>{{ $conference->other_details }}</h4></td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td class="col-md-6"><h4>Contact Email</h4></td>--}}
{{--<td class="col-md-6"><h4>{{ $conference->contact_email }}</h4></td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td class="col-md-6"><h4>Website</h4></td>--}}
{{--<td class="col-md-6"><h4>{{ $conference->website }}</h4></td>--}}
{{--</tr>--}}