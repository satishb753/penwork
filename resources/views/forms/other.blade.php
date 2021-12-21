<div id="other" class="hidden">

    <form action="{{ route('other.fill') }}" method="post" enctype="multipart/form-data">

        <div class="col-md-6">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title" name="title">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" placeholder="Description" name="description">
            </div>
            <br>
            <label> Upload Image</label>


            <input type="file" name="logo">

            {{--<span class='label label-info' id="upload-file-info"></span>--}}

            <br>
            @include('includes.streams')
            <br>

            <button type="submit" id="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>

    </form>
</div>