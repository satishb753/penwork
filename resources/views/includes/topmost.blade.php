<div class="container">
    <div class="head row" style="font-family:sans;height:50px;">
        <h3 class="col-sm-3"><a href="{{ route('home') }}"><img width="120" height="50" src="{{ URL::to('imgs/mainLogo.jpg') }}"></a></h3>

        <h3 class="col-sm-3 col-sm-offset-6">
            @if(Auth::check())
                <button class="btn btn-info" onclick="window.location.href='{{ route('logout') }}'" style="float:right;">Logout</button>
            @else
                {{--<a href="{{ route('signup.get') }}" class="btn btn-info" data-toggle="modal" data-target="#myModal">Sign Up</a>--}}

                {{--|--}}
                {{--<a class="btn btn-success" data-toggle="modal" data-target="#login-modal">Login</a>--}}
            @endif
        </h3>

        {{--@include('models.signup')--}}

        @include('models.login')
    </div>
</div>

<br>
<br>