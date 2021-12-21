@extends('layouts.master')

@section('title')
    ThePenWork
@endsection

<style>
    * {box-sizing: border-box}
    body {font-family: "Lato", sans-serif;}

    .leftone {
        color:purple;
        background-color:white;
        border:2px solid black;
        border-radius:30px;
        margin-top:10px;
    }

    .leftone div {
        padding: 10 10 10 10;
    }

    .clicked {
        background-color:f2f2f2;
    }

    .tabs a:hover {
        text-decoration:none;
    }

    .leftone a:hover {
        text-decoration:none;
    }

    .rightone{
        height:100%;
    }

    /*.right-scroll{*/
        /*overflow:auto;*/
    /*}*/

</style>

@section('content')
    <div class="head row" style="font-family:sans;height:50px;">
        <h3 class="col-sm-3"><a href="{{ route('home') }}"><img width="120" height="50" src="{{ URL::to('imgs/mainLogo.jpg') }}"></a></h3>

        <h3 class="col-sm-3 col-sm-offset-6">
        @if(Auth::check())
            <button class="btn btn-info" onclick="window.location.href='{{ route('logout') }}'" style="float:right;">Logout</button>
        @else
            <a href="{{ route('signup.get') }}" class="btn btn-info" data-toggle="modal" data-target="#myModal">Sign Up</a> |
            <a class="btn btn-success" data-toggle="modal" data-target="#login-modal">Login</a>
        @endif
        </h3>

        {{--@include('models.signup')--}}

        @include('models.login')
    </div>
    <br>
    <br>

    <div class="row">

        <div class="col-sm-2 leftone">
            {{--<div id="inbox">--}}
                {{--<span class="glyphicon glyphicon-envelope"></span>--}}
                {{--<a href="#inbox">Inbox</a>--}}
            {{--</div>--}}
            <span ></span>
            <div id="intern" style="padding-top:20px;">
                <span class="glyphicon glyphicon-user"></span>
                <a href="{{ route('internship.show') }}">Internship</a>
            </div>
            <div id="project">
                <span class="glyphicon glyphicon-bullhorn"></span>
                <a href="{{ route('project.show') }}">Projects</a>
            </div>
            <div id="job">
                <span class="glyphicon glyphicon-lock"></span>
                <a href="{{ route('job.show') }}">Job Openings</a>
            </div>
            <div id="conference">
                <span class="glyphicon glyphicon-blackboard"></span>
                <a href="{{ route('conference.show') }}">Conferences</a>
            </div>
            <div id="publication">
                <span class="glyphicon glyphicon-duplicate"></span>
                <a href="{{ route('publication.show') }}">Publications</a>
            </div>
            <div id="coursetag">
                <span class="glyphicon glyphicon-book"></span>
                <a href="http://coursetag.org" target="_blank">CourseTag</a>
            </div>
            <div id="tantradarshan">
                <span class="glyphicon glyphicon-road"></span>
                <a href="http://tantradarshan.com" target="_blank">Industrial Visit</a>
            </div>

            <hr>
            {{--don't remove--}}
            {{--<div id="aboutus">--}}
                {{--<span class="glyphicon glyphicon-cog"></span>--}}
                {{--<a href="#aboutus">About Us</a>--}}
            {{--</div>--}}
            <div id="settings" style="margin-top:-20px;">
                <span class="glyphicon glyphicon-cog"></span>
                <a href="{{ route('settings.show') }}">My Settings</a>
            </div>
        </div>

        <div class="col-sm-10 right-scroll">

            <div class="rightone">

                <div id="intern">
                    @yield('contents')
                    {{--@include('pages.internship')--}}
                </div>

                {{--<div id="job">--}}
                    {{--@yield('job')--}}
                {{--</div>--}}

            </div>

        </div>

    </div>




    <script>
        $(document).ready(
            function(){
//                $('.leftone div').on('click', function() {
//                    id = $(this).attr('id');
//                    $('.rightone > div').addClass('hidden');
//                    $('.rightone div#'+id).removeClass('hidden');
//                });

                $('.tabs div').on('click', function(){
                   id = $(this).attr('id');
                    $('.tabs div').removeClass('clicked');
                    $(this).addClass('clicked');
                    $('.tab_content form').addClass('hidden');
                    $('.tab_content form#' + id + '_details').removeClass('hidden');
                });
            }
        );
    </script>

@endsection

