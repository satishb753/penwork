<div id="internship">

    <form action="{{ route('internship.fill') }}" method="post" enctype="multipart/form-data">

        <div class="col-md-6">
            <div class="form-group">
                <label for="title">Internship Title</label>
                <input type="text" class="form-control" id="title" placeholder="Internship Title" name="internship_title">
            </div>

            <div class="form-group">
                <label for="category">Internship Category</label>
                <input type="text" class="form-control" id="category" placeholder="Internship Category" name="internship_category">
            </div>

            <div class="form-group">
                <label for="skills">Skills</label>
                <input type="text" class="form-control" id="skills" placeholder="Skills" name="skills">
            </div>

            <div class="form-group">
                <label for="other_skills">Other Skills</label>
                <input type="text" class="form-control" id="other_skills" placeholder="Other Skills" name="other_skills">
            </div>

            <div class="form-group">
                <label for="number_of_opening">Number of Opening</label>
                <input type="number" class="form-control" id="number_of_opening" placeholder="Number of Openings" name="number_of_openings">
            </div>

            <div class="form-group">
                <label for="job_description">Job Description</label>
                <textarea type="text" class="form-control" id="job_description" placeholder="Job Description" name="job_description"></textarea>
            </div>

            <div class="form-group">
                <label for="job_location">Job Location</label>
                <input type="text" class="form-control" id="job_lcoation" placeholder="Job Location" name="job_location">
            </div>

            <div class="form-group">
                <label for="start_date">Start Date (Approx.)</label>
                <input type="text" class="form-control" id="start_date" placeholder="Start Date" name="start_date">
            </div>

            <div class="form-group">
                <label for="end_date">End Date (Approx.)</label>
                <input type="text" class="form-control" id="end_date" placeholder="End Date" name="end_date">
            </div>

            <div class="form-group">
                <label for="salary">Salary/Stipend</label>
                <input type="text" class="form-control" id="salary" placeholder="Salary" name="salary">
            </div>

            <div class="form-group">
                <label for="company_name">Company Name</label>
                <input type="text" class="form-control" id="company_name" placeholder="Name of Company" name="company_name">
            </div>

            <div class="form-group">
                <label for="company_description">Company Description</label>
                <textarea type="text" class="form-control" id="company_description" placeholder="Company Description" name="company_description"></textarea>
            </div>

            <label>Company Logo</label>
            <input id="my-file-selector" type="file" name="logo" hidden>
            <br>
            {{--<span class='label label-info' id="upload-file-info"></span>--}}
            @include('includes.streams')

            <br>
            <br>

            <button type="submit" id="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>

    </form>
</div>