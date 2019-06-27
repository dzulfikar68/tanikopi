<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Smarteye Confirmation Page</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href=" {{asset('bootstrap/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('bootstrap/vendors/css/vendor.bundle.base.css')}}" >
    <link rel="stylesheet" href=" {{asset('bootstrap/vendors/css/vendor.bundle.addons.css')}}" >
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href=" {{asset('bootstrap/vendors/iconfonts/font-awesome/css/font-awesome.css')}} ">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href=" {{asset('bootstrap/css/style.css')}} ">


    <link rel="stylesheet" href=" {{asset('css/style.css')}} ">
    <!-- endinject -->
    <link rel="shortcut icon" href=" {{asset('bootstrap/images/favicon.png')}} " />
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
        <div class="content-wrapper d-flex align-items-center text-center error-page bg-primary">
            <div class="row flex-grow">
                <div class="col-lg-12 text-white">
                    <div class="row align-items-center d-flex flex-row">
                        <div class="col-lg-12">
                            @if($success)
                                <h2 class="font-weight-light">Confirmation Success!</h2>
                            @else
                                <h2 class="font-weight-light">Confirmation Failed!</h2>
                            @endif
                            <h4 class="font-weight-light">{{$message}}</h4>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 text-center mt-xl-2">
                            @if($success)
                                <a class="text-white font-weight-medium" href="{{action('Admin\AuthController@login')}}">Click to login page</a>
                            @endif
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 mt-xl-2">
                            <p class="text-white font-weight-medium text-center">Copyright &copy; 2018 All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

</body>

</html>
