<!doctype html>
<html lang="en" class="minimal-theme">


<!-- Mirrored from codervent.com/skodash/demo/tabular-menu/ltr/authentication-signin-with-header-footer.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 06:15:34 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('admin-assets')}}/assets/images/favicon-32x32.png" type="image/png" />
    <!-- Bootstrap CSS -->
    <link href="{{asset('admin-assets')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('admin-assets')}}/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{asset('admin-assets')}}/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('admin-assets')}}/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{asset('admin-assets')}}/assets/css/pace.min.css" rel="stylesheet" />

    <title>Skodash - Bootstrap 5 Admin Template</title>
</head>

<body class="bg-surface">

<!--start wrapper-->
<div class="wrapper">



    <!--start content-->
    <main class="authentication-content">
        <div class="container">
            <div class="mt-4">
                <div class="card rounded-0 overflow-hidden shadow-none border mb-5 mb-lg-0">
                    <div class="row g-0">
                        <div class="col-12 order-1 col-xl-8 d-flex align-items-center justify-content-center border-end">
                            <img src="{{asset('admin-assets')}}/assets/images/error/auth-img-7.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-12 col-xl-4 order-xl-2">
                            <div class="card-body p-4 p-sm-5">
                                <h5 class="card-title">Sign In</h5>
                                <p class="card-text mb-4">See your growth and get consulting support!</p>
                                <form class="form-body" action="{{route('login')}}" method="post">
                                    @csrf

                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                                                <input type="email" name="email" class="form-control radius-30 ps-5" id="inputEmailAddress" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                                                <input type="password" name="password" class="form-control radius-30 ps-5" id="inputChoosePassword" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="checkbox" id="flexSwitchCheckChecked" checked="">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary radius-30">Sign In</button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="login-separater text-center"> <span>OR SIGN IN WITH EMAIL</span>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex align-items-center gap-3 justify-content-center">
                                                <button type="button" class="btn btn-white text-danger"><i class="bi bi-google me-0"></i></button>
                                                <button type="button" class="btn btn-white text-primary"><i class="bi bi-linkedin me-0"></i></button>
                                                <button type="button" class="btn btn-white text-info"><i class="bi bi-facebook me-0"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <p class="mb-0">Don't have an account yet? <a href="authentication-signup-with-header-footer.html">Sign up here</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



</div>
<!--end wrapper-->


<!-- Bootstrap bundle JS -->
<script src="{{asset('admin-assets')}}/assets/js/bootstrap.bundle.min.js"></script>

<!--plugins-->
<script src="{{asset('admin-assets')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('admin-assets')}}/assets/js/pace.min.js"></script>


</body>


<!-- Mirrored from codervent.com/skodash/demo/tabular-menu/ltr/authentication-signin-with-header-footer.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 06:15:36 GMT -->
</html>
