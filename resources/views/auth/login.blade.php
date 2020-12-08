<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Mainstreet MfB Login</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">
    <link rel="icon" href="{{ asset('dist/img/favicon.png') }}" type="image/x-icon">

    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
    <div class="loader-pendulums"></div>
</div>
<!-- /Preloader -->

<!-- HK Wrapper -->
<div class="hk-wrapper">

    <!-- Top Navbar -->
@include('includes.basicnav')
<!-- /Top Navbar -->


    <!-- Main Content -->
    <div class="hk-pg-wrapper hk-auth-wrapper" style="background-image:url({{ asset('dist/img/bk.png') }}); background-size: cover;">
        <div class="container-fluid">
    <div class="row">
        <div class="col-xl-4 pa-0">
            <div class="auth-form-wrap py-xl-0 py-50">
                <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                    <form style="border-radius: 20px; background-color: #94939b; padding: 20px;;"
                          action="{{ route('auth.login') }}" method="POST">
                        {{ csrf_field() }}
                        @include('errors.list')
                        <p class="mb-30"><span style="color: #ffffff;">Welcome back,</span><span
                                style="color: #8d267d;"><b> login here.</b></span></p>
                        <div class="form-group">
                            <input class="form-control" style="border-radius: 200px;" name="email"
                                   placeholder="Email"
                                   type="email" value="{{ old('email')}} ">
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" style="border-radius: 200px;" name="password"
                                       placeholder="Password"
                                       type="password">
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox mb-25">
                            <input class="custom-control-input" id="same-address" type="checkbox" checked>
                            <label class="custom-control-label font-14" for="same-address"><span
                                    style="color: #ffffff;">Remember me</span></label>
                        </div>
                        <button class="btn btn-primary btn-block" style="border-radius: 20px;" type="submit">
                            Login
                        </button>
                        &nbsp;
                        <div class="dropdown-divider" style="border-top: 8px solid #8d267d;"></div>
                        <p class="mb-30"><span style="color: #ffffff;">New customer?</span></p>
                        <a class="btn btn-primary btn-block" href="{{ route('auth.register-page')}}" role="button"
                           style="border-radius: 20px;">Self-Registration</a>

                    </form>
                </div>
            </div>
        </div>


    </div>
        </div>
    </div>
    <!-- /Main Content -->

</div>
<!-- /HK Wrapper -->
<div><p style="color: #ffffff; text-align: center; background-color: #8d267d; height: 30px; padding-top: 5px; padding-bottom: 5px;">Copyright © 2020. Mainstreet MFB. All rights reserved.</p></div>
<!-- jQuery -->
<script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('vendors/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{ asset('dist/js/jquery.slimscroll.js') }}'"></script>

<!-- Fancy Dropdown JS -->
<script src="{{ asset('dist/js/dropdown-bootstrap-extended.js') }}"></script>

<!-- Owl JavaScript -->
<script src="{{ asset('vendors/owl.carousel/dist/owl.carousel.min.js') }}"></script>

<!-- FeatherIcons JavaScript -->
<script src="{{ asset('dist/js/feather.min.js') }}"></script>

<!-- Init JavaScript -->
<script src="{{ asset('dist/js/init.js') }}"></script>
<script src="{{ asset('dist/js/login-data.js') }}"></script>
</body>

</html>

