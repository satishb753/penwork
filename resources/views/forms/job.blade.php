<div id="job" class="hidden">
    <form action="{{ route('job.fill') }}" method="post" enctype="multipart/form-data">

        <div class="col-md-6">
            <div class="form-group">
                <label for="title">Job Title</label>
                <input type="text" class="form-control" id="title" placeholder="Job Title" name="job_title">
            </div>

            <div class="form-group">
                <label for="qualification">Qualification</label>
                <input type="text" class="form-control" id="qualification" placeholder="Qualification" name="qualification">
            </div>

            <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" class="form-control" id="designation" placeholder="Designation" name="designation">
            </div>

            <div class="form-group">
                <label for="key_skills">Key Skills</label>
                <input type="text" class="form-control" id="key_skills" placeholder="Key Skills" name="key_skills">
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
                <label for="experience">Experience</label>
                <input type="text" class="form-control" id="experience" placeholder="Experience" name="experience">
            </div>

            <div class="form-group">
                <label for="end_date">Last Date of Application</label>
                <input type="text" class="form-control" id="end_date" placeholder="End Date" name="end_date">
            </div>

            <div class="form-group">
                <label for="salary">Salary</label>
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
            @include('includes.streams')
            <br><br>

            <button type="submit" id="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>

    </form>
</div>