@extends('home')

@section('contents')
    <div style="margin-left:35px;">
        <div style="height:80px;background-color:f1f1f1;border-radius:30px;text-align:center;">
            <h4 style="padding-top:30px;font-family:roman;font-size:1.7em;">My Settings</h4>
        </div>
        <br>
        <br>


        <div class="tabs">

        <div class="col-md-6 clicked" id="personal" style="text-align:center">
            <h4><a href="#personal_details">Personal Details</a></h4>
        </div>

        <div class="col-md-6" id="educational" style="text-align:center">
            <h4><a href="#educational_details">Educational Details</a></h4>
        </div>

        {{--<div class="col-md-4" id="work">--}}
        {{--<h4><a href="#job_details">Job Details</a></h4>--}}
        {{--</div>--}}

    </div>

</div>

<br>
<br>
<br>
<br>


<div class="row">

    <div class="row tab_content">

        <form action="{{ route('personal_details.fill') }}" method="post" style="margin-left:30%;" class="active" id="personal_details">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="firstname" placeholder="First Name" name="first_name">
                </div>

                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="last_name">
                </div>

                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="text" class="form-control" id="dob" placeholder="Date of Birth" name="dob">
                </div>

                <div class="form-group">
                    <label for="phone">Contact</label>
                    <input type="number" class="form-control" id="phone" placeholder="Phone Number" name="contact">
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" placeholder="City" name="city">
                </div>

                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="state" placeholder="State" name="state">
                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" placeholder="Country" name="country">
                </div>

                {{--<label for="submit">Submit Details</label>--}}
                <button type="submit" id="submit" class="btn btn-primary" style="width: 100%;">Save & Proceed</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <br>
                <br>

            </div>

        </form>

        <form action="{{ route('educational_details.fill') }}" method="post" style="margin-left:50px;" class="hidden" id="educational_details">

            <div class="col-md-6">

                <div class="form-group">
                    <label for="university">University</label>
                    <input type="text" class="form-control" id="university" placeholder="University Name" name="university">
                </div>

                <div class="form-group">
                    <label for="college">College/Institute</label>
                    <input type="text" class="form-control" id="institute" placeholder="College Name" name="institute">
                </div>

                <div class="form-group">
                    <label for="degree">Degree</label>
                    <input type="text" class="form-control" id="degree" placeholder="{{ Auth::user()->degree }}" name="degree" disabled>
                </div>

                <div class="form-group">
                    <label for="specialization">Branch</label>
                    <input type="text" class="form-control" id="specialization" placeholder="{{ Auth::user()->branch }}" name="specialization" disabled>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="text" class="form-control" id="year" placeholder="Pursuing Year" name="year">
                </div>

                <div class="form-group">
                    <label for="score">Percentage/CGPA/Grade</label>
                    <input type="text" class="form-control" id="score" placeholder="Percentage/CGPA/Grade" name="score">
                </div>

                <button type="submit" id="submit" class="btn btn-primary" style="width:100%;margin-top:6%;">Submit</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <br>
                <br>
            </div>

        </form>

    </div>

    <script>
//        $(document).ready(function{
//            alert('fucck off');
//           $('#personal').on('click',function(){
//               $('#education_details').addClass('hidden');
//               alert('clicked');
//               $(this).removeClass('hidden');
//           }) ;
//
//            $('#educational').on('click',function(){
//                $('#personal_details').addClass('hidden');
//                $(this).removeClass('hidden');
//            }) ;
//        });
    </script>

</div>
@endsection