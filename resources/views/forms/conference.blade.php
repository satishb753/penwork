<div id="conference" class="hidden">
    <form action="{{ route('conference.fill') }}" method="post" enctype="multipart/form-data">

        <div class="col-md-6">

            <div class="form-group">
                <label for="conference_title">Conference Title</label>
                <input type="text" class="form-control" id="conference_title" placeholder="Conference Title" name="conference_title">
            </div>

            <div class="form-group">
                <label for="area_of_interest">Area of Interest</label>
                <input type="text" class="form-control" id="area_of_interest" placeholder="Area of Interest" name="area_of_interest">
            </div>

            <div class="form-group">
                <label for="deadline">Last Date of Submission</label>
                <input type="text" class="form-control" id="deadline" placeholder="Deadline" name="deadline"></input>
            </div>

            <div class="form-group">
                <label for="organised_by">Organised By</label>
                <input type="text" class="form-control" id="organised_by" placeholder="Organised By" name="organised_by">
            </div>

            <div class="form-group">
                <label for="date">Conference Date</label>
                <input type="text" class="form-control" id="date" placeholder="Date" name="date">
            </div>

            <div class="form-group">
                <label for="venue"> Conference Venue</label>
                <input type="text" class="form-control" id="venue" placeholder="Venue" name="venue">
            </div>

            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="country" placeholder="Country" name="country">
            </div>

            <div class="form-group">
                <label for="about_event">About Event</label>
                <textarea type="text" class="form-control" id="about_event" placeholder="About Event" name="about_event"></textarea>
            </div>

            <div class="form-group">
                <label for="keynote_speakers">Keynote Speakers</label>
                <input type="text" class="form-control" id="keynote_speakers" placeholder="Keynote Speakers" name="keynote_speakers">
            </div>

            <div class="form-group">
                <label for="other_details">Other Details</label>
                <textarea type="text" class="form-control" id="other_details" placeholder="Other Details" name="other_details"></textarea>
            </div>

            <div class="form-group">
                <label for="contact_email">Contact Email</label>
                <input type="email" class="form-control" id="contact_email" placeholder="Contact Email" name="contact_email">
            </div>

            <div class="form-group">
                <label for="website">Conference Website</label>
                <input type="text" class="form-control" id="website" placeholder="Website" name="website">
            </div>

            @include('includes.streams')

            <br><br>

            <button type="submit" id="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>

    </form>
</div>