<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Register As :</h4>
            </div>
            <div class="modal-body">

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
                        <button type="submit" name="register" class="btn btn-primary btn-lg btn-block">Proceed for Registration</button>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                    </div>
                </form>
                <!-- End # Login Form -->

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

            </div>

            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
            {{--</div>--}}
        </div>

    </div>
</div>