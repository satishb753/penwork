@include('includes.libs')
@include('includes.topmost')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <form id="register-form" action="{{ route('register') }}" method="post">
                <div class="modal-body">
                    <label>Email ID (This will be treated as your User ID)</label>
                    <input id="email" name="email" class="form-control" type="text" placeholder="Email" value="{{ Request::old('email') }}" required>
                    </br>
                    <label>Password</label>
                    <input id="password" name="password" class="form-control" type="password" placeholder="Password" value="{{ Request::old('password') }}" required>
                    </br>
                    <label>Confirm Password</label>
                    <input id="confirm_password" name="confirm_password" class="form-control" type="password" placeholder="Confirm Password" value="{{ Request::old('confirm_password') }}" data-rule-equalTo="#password" required>
                    <div type="text" class="hidden" id="pass_warn">Passwords do not match.</div>
                    </br>
                    {{--<input id="user_token" name="user_token" class="form-control" placeholder="User Token">--}}
                    {{--</br>--}}
                    <label>Degree</label>
                    <input id="degree" name="degree" class="form-control" type="text" placeholder="B.E / B.Tech / M.E / M.Tech / Ph.D / Post Doc / Other " value="{{ Request::old('degree') }}" required>
                    </br>
                    <label>Branch</label>
                    <input id="branch" name="branch" class="form-control" type="text" placeholder="Civil / Mechanical / Electrical / Electronics / Computer / IT / Other" value="{{ Request::old('branch') }}" required>
                    </br>
                    <label style="color:red;">Enter 10-digit Membership ID</label>
                    <input id="member_id" name="member_id" class="form-control" type="text" placeholder="This is Paid Subscription" value="{{ Request::old('member_id') }}">
                    </br>
                    </br>
                    <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </div>
            </form>
            <!-- End # Login Form -->


        </div>
    </div>



    <script>
        $(document).ready(function(){
            jQuery('#register-form').validate({
                rules: {
                    password: {
                        minlength: 5
                    },
                    confirm_password: {
                        minlength: 5,
                        equalTo: '[name="password"]'
                    }
                }
            });
        });
    </script>

