<div id="publication" class="hidden">
    <form action="{{ route('publication.fill') }}" method="post" enctype="multipart/form-data">

        <div class="col-md-6">
            <div class="form-group">
                <label for="publication_title">Publication Title</label>
                <input type="text" class="form-control" id="publication_title" placeholder="Publication Title" name="publication_title">
            </div>

            <div class="form-group">
                <label for="volume">Volume</label>
                <input type="text" class="form-control" id="volume" placeholder="Volume" name="volume">
            </div>

            <div class="form-group">
                <label for="date">Issue Date</label>
                <input type="text" class="form-control" id="date" placeholder="Date" name="date">
            </div>

            <div class="form-group">
                <label for="paper_title">Paper Title</label>
                <input type="text" class="form-control" id="paper_title" placeholder="Paper Title" name="paper_title">
            </div>

            <div class="form-group">

                {{--<label for="author_name">Authors</label>--}}

                <div class="row">

                    <div class="col-md-5">
                        <label>Author Names</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="author_name" placeholder="Author Name" name="author_01">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="author_name" placeholder="Author Name" name="author_02">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="author_name" placeholder="Author Name" name="author_03">
                        </div>

                    </div>

                    <div class="col-md-7">
                        <label for="author_01"> Author Affilitaion</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="affiliation" placeholder="Affiliation" name="affiliation_01">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="affiliation" placeholder="Affiliation" name="affiliation_02">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="affiliation" placeholder="Affiliation" name="affiliation_03">
                        </div>

                    </div>

                </div>

            </div>

            <div class="form-group" style="margin-top:-10px;">
                <label for="proceeding">Published in Proceeding</label>
                <textarea type="text" class="form-control" id="proceeding" placeholder="Published in Proceeding" name="proceeding"></textarea>
            </div>

            <div class="form-group" style="margin-top:-10px;">
                <label for="abstract">Abstract</label>
                <textarea type="text" class="form-control" id="abstract" placeholder="Abstract" name="abstract"></textarea>
            </div>

            <div class="form-group">
                <label for="keywords">Keywords</label>
                <input type="text" class="form-control" id="keywords" placeholder="Keywords" name="keywords">
            </div>

            <div class="form-group">
                <label for="issn_no">ISSN / ISBN Number</label>
                <input type="text" class="form-control" id="issn_no" placeholder="ISSN / ISBN Number" name="issn_no">
            </div>

            <label>Transaction Publishing Organisation Logo</label>
            <input id="my-file-selector" type="file" name="logo" hidden>

            <br>
            @include('includes.streams')
            <br><br>

            <button type="submit" id="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>

    </form>
</div>