<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    @include('includes.libs')

</head>
<body>
<div class="container">

    {{--<header class="row">--}}
        {{--@include('includes.header')--}}
    {{--</header>--}}

    <div class="content">
        @yield('content')
    </div>

</div>
</body>
</html>
