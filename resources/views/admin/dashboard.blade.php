<html>
    <head>
        @include('includes.libs')
    </head>
    <body>
        <h2 style="text-align:center">Admin Panel</h2>
    <br>

    <div class="row jumbotron">
        <div class="col-md-offset-3 col-md-3">
            <div class="form-group" id="grayhead" style="max-width:300px;">
                <label for="post_new">Post New</label>
                <select class="form-control" id="post_new" name="post_new">
                    <option value="internship">Internship</option>
                    <option value="project">Projects</option>
                    <option value="job">Job Openings</option>
                    <option value="conference">Conference</option>
                    <option value="publication">Publication</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>

        <div class="col-md-offset-3 col-md-3">
            <a href="{{ route('logout') }}" class="btn btn-primary">LOG OUT</a>
        </div>
    </div>


    <div class="row" id="forms" style="margin-left:20%;">

        @include('forms.internship')

        @include('forms.job')

        @include('forms.project')

        @include('forms.publication')

        @include('forms.conference')

        @include('forms.other')

    </div>

    <br>
    <br>

    <script type="text/javascript" src="{{ URL::to('src/js/dashboard.js') }}">

    </script>
    </body>
</html>

