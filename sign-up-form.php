<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <link rel="stylesheet" href="assets/css/sign-up-style.css">


</head>

<body>
<!-- Modal login -->
<div id="modal-login" class="modal fade text-center sign-up" role="dialog">
    <button type="button" class="btn btn-default close" data-dismiss="modal">
        <i class="fa fa-times" aria-hidden="true"></i>
    </button>
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="form">

                <ul class="tab-group">
                    <li class="tab active"><a href="#signup">Sign Up</a></li>
                    <li class="tab"><a href="#login">Log In</a></li>
                </ul>

                <div class="tab-content">
                    <div id="signup">
                        <h1>Sign Up for Free</h1>

                        <form action="/" method="post">

                            <div class="top-row">
                                <div class="field-wrap">
                                    <label>
                                        First Name<span class="req">*</span>
                                    </label>
                                    <input type="text" required autocomplete="off"/>
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Last Name<span class="req">*</span>
                                    </label>
                                    <input type="text" required autocomplete="off"/>
                                </div>
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Email Address<span class="req">*</span>
                                </label>
                                <input type="email" required autocomplete="off"/>
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Set A Password<span class="req">*</span>
                                </label>
                                <input type="password" required autocomplete="off"/>
                            </div>

                            <button type="submit" class="button button-block"/>
                            Get Started</button>

                        </form>

                    </div>

                    <div id="login">
                        <h1>Welcome Back!</h1>

                        <form action="/" method="post">

                            <div class="field-wrap">
                                <label>
                                    Email Address<span class="req">*</span>
                                </label>
                                <input type="email" required autocomplete="off"/>
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Password<span class="req">*</span>
                                </label>
                                <input type="password" required autocomplete="off"/>
                            </div>

                            <p class="forgot"><a href="#">Forgot Password?</a></p>

                            <button class="button button-block"/>
                            Log In</button>

                        </form>

                    </div>

                </div><!-- tab-content -->

            </div> <!-- /form -->
        </div>

    </div>
</div>
<!-- /Modal -->

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="assets/js/index.js"></script>

</body>
</html>
