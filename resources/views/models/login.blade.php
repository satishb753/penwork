<div class="modal fade" id="login-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;width:100%;style=z-index:100">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" align="center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </div>

            <!-- Begin # DIV Form -->
            <div id="div-forms">

                <!-- Begin # Login Form -->
                <form id="login-form" action="{{ route('login') }}" method="post">
                    <div class="modal-body">
                        <input id="email" name="email" class="form-control" type="text" placeholder="Email" value="{{ Request::old('email') }}" required>
                        </br>
                        <input id="password" name="password" class="form-control" type="password" placeholder="Password" value="{{ Request::old('password') }}" required>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" id="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                        </div>
                        <div>
                            <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                            {{--<button id="login_register_btn" type="button" class="btn btn-link">Register</button>--}}
                            <p id="send_mail" class="hidden">Write an e-mail to satishb753@gmail.com for password recovery.</p>
                            <script>
                                $(document).ready(function(){
                                    $('#login_lost_btn').on('click',function(){
                                        $('#send_mail').toggleClass('hidden');
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </form>
                <!-- End # Login Form -->

                <!-- Begin | Lost Password Form -->
                <form id="lost-form" style="display:none;">
                    <div class="modal-body">
                        <div id="div-lost-msg">
                            <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="text-lost-msg">Type your e-mail.</span>
                        </div>
                        <input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                        </div>
                        <div>
                            <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                            <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                        </div>
                    </div>
                </form>
                <!-- End | Lost Password Form -->

                <!-- Begin | Register Form -->
                <form id="register-form" style="display:none;">
                    <div class="modal-body">
                        <div id="div-register-msg">
                            <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="text-register-msg">Register an account.</span>
                        </div>
                        <input id="register_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                        <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                        <input id="register_password" class="form-control" type="password" placeholder="Password" required>
                    </div>
                    <div class="modal-footer">
                        <div>
                            {{--<button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>--}}
                            <a href="#" role="button" data-toggle="modal" data-target="#myModal">Register</a>
                        </div>
                        <div>
                            <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                            <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                        </div>
                    </div>
                </form>
                <!-- End | Register Form -->

            </div>
            <!-- End # DIV Form -->

        </div>
    </div>
</div>