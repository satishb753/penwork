@include('includes.libs')
<div class="row jumbotron">
    <div class="col-md-6 col-sm-offset-3" style="max-width:400px;">

        <form action="{{ route('admin.login') }}" method="post">

            <div class="form-group">
                <label for="email">Username bhar:</label>
                <input class="form-control" name="email">
            </div>

            <div class="form-group">
                <label for="password">Password bhi bhar de:</label>
                <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-primary" id="submit">Submit</button><hr>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>

    </div>

</div>
