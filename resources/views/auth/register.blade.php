<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Crovex - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('corvex/backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('corvex/backend/css/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="{{asset('corvex/backend/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('corvex/backend/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('corvex/backend/css/app.min.css')}}" rel="stylesheet" type="text/css"/>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
</head>

<body class="account-body accountbg">

<!-- Log In page -->
<div class="container">
    <div class="row vh-100 ">
        <div class="col-12 align-self-center">
            <div class="auth-page">
                <div class="card auth-card shadow-lg" style="margin-top: 30px!important;">
                    <div class="card-body">
                        <div class="px-3">
                            <div class="auth-logo-box">
                                <a href="{{route('dashboard')}}" class="logo logo-admin"><img src="{{asset('corvex/backend/images/logo-sm.png')}}" height="55" alt="logo" class="auth-logo"></a>
                            </div><!--end auth-logo-box-->

                            <div class="text-center auth-logo-text">
                                <h4 class="mt-0 mb-3 mt-5">Free Register for Invoice Panel</h4>
                                <p class="text-muted mb-0">Get your account now.</p>
                            </div> <!--end auth-logo-text-->


                            <form class="form-horizontal auth-form my-4" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="username">Name</label>
                                    <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-user"></i>
                                                </span>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                                    </div>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label for="useremail">Email</label>
                                    <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-mail"></i>
                                                </span>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
                                    </div>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-lock"></i>
                                                </span>
                                        <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password">
                                    </div>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label for="conf_password">Confirm Password</label>
                                    <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-lock-open"></i>
                                                </span>
                                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Enter Confirm Password">
                                    </div>

                                    <div class="form-group">
                                        <label for="mo_number">Mobile Number</label>
                                        <div class="input-group mb-3">
                                                    <span class="auth-form-icon">
                                                        <i class="dripicons-phone"></i>
                                                    </span>
                                            <input type="tel" class="form-control" name="phone_no" id="mo_number" placeholder="Enter Mobile Number">
                                        </div>
                                    </div><!--end form-group-->
                                    
                                </div><!--end form-group-->

                                <div class="form-group row mt-4">
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-switch switch-success">
                                            <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                            <label class="custom-control-label text-muted" for="customSwitchSuccess">By registering you agree to the <a href="#" class="text-primary">Terms & Conditions of Use</a></label>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end form-group-->

                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light" type="submit">Register <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div><!--end col-->
                                </div> <!--end form-group-->
                            </form><!--end form-->
                        </div><!--end /div-->

                        <div class="m-3 text-center text-muted">
                            <p class="">Already have an account ? <a href="{{route('login')}}" class="text-primary ml-2">Log in</a></p>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end auth-card-->
        </div><!--end col-->
    </div><!--end row-->
</div><!--end container-->
<!-- End Log In page -->


<!-- jQuery  -->
<script src="{{asset('backend/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/js/metismenu.min.js')}}"></script>
<script src="{{asset('backend/js/waves.js')}}"></script>
<script src="{{asset('backend/js/feather.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.slimscroll.min.js')}}"></script>

<!-- App js -->
<script src="{{asset('backend/js/app.js')}}"></script>

</body>

</html>
