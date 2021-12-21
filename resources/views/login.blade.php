@include('includes.libs')

<div class="container">
    <div class="head row" style="font-family:sans;height:auto">
        <h3 class="col-sm-3"><a href="{{ route('home') }}"><img width="120" height="50" src="{{ URL::to('imgs/mainLogo.jpg') }}"></a></h3>

        <h3 class="col-sm-3 col-sm-offset-6">
            @if(Auth::check())
                <button class="btn btn-info" onclick="window.location.href='{{ route('logout') }}'">Logout</button>
            @else
                <a href="{{ route('signup.get') }}" class="btn btn-info">Sign Up</a>
                {{--|--}}
                {{--<a class="btn btn-success" data-toggle="modal" data-target="#login-modal">Login</a>--}}
            @endif
        </h3>

        {{--@include('models.signup')--}}

        @include('models.login')
    </div>

</div>


<div class="row jumbotron">
    <div class="col-md-6 col-sm-offset-4" style="max-width:400px;margin-top:-30px;">

        <form action="{{ route('login') }}" method="post">

            <label><h3>Login To Your Penwork Account</h3></label>

            <br>
            <br>
            <br>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" name="email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" id="submit" style="width:100%;">Submit</button>
            <br>
            <br>
            <a id="forgot" type="text">Forgot Password ?</a>
            <br>
            <div id="help" type="text" class="hidden">Send a mail to coursetag.org@gmail.com</div>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>

    </div>

</div>

<script>
    $(document).ready(function(){
        $('#forgot').on('click',function(){
            $('#help').toggleClass('hidden');
        });
    });
</script>