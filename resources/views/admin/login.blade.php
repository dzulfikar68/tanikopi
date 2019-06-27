<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>TaniKopi</title>

    <!-- Favicons -->
    <link href="{{ asset('image/favicon.png') }}" rel="icon">
    <link href="{{ asset('image/favicon.png') }}" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/dashio/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('bootstrap/dashio/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="{{ asset('bootstrap/dashio/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/dashio/css/style-responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style-admin.css') }}" rel="stylesheet">

    <!-- =======================================================
      Template Name: Dashio
      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
</head>

<body>
<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<div id="login-page">
    <div class="container">
        <form method="POST" action="{{ action('Admin\AuthController@login') }}" class="form-login">
            @csrf
            <h2 class="form-login-heading">sign in now</h2>

            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="Email" autofocus name="email">
                <br>
                <input type="password" class="form-control" placeholder="Password" name="password">
                <br><br>
                <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>

            </div>
        </form>
        @include('message');
    </div>
</div>
<script src="{{ asset('bootstrap/dashio/lib/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('bootstrap/dashio/lib/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type="text/javascript" src="{{ asset('bootstrap/dashio/lib/jquery.backstretch.min.js')}}"></script>
<script>
    $.backstretch("{{asset('image/freepik-bg.svg')}}", {
        speed: 500
    });
</script>
<script type="text/javascript">
    // display notification if message not null
    if ($('.pop-up').children().length > 0) {
        $('.pop-up').animate({
            'opacity': 1,
            'right': "30px"
        }, 300).animate({'right': "15px"}, 400);

        // close notification by time
        setTimeout(close_pop_up, 7000);
    }

    // close notification function
    function close_pop_up() {
        var width = $('.pop-up').width();
        $('.pop-up').animate({
            'opacity': 0,
            'right': -width
        }, 300, function () {
            $('.pop-up').remove();
        });
    }

    // close notification
    $('.pop-up .close').click(close_pop_up);

    // remove notification when clicked out of target
    $(document).click(function (e) {
        var pop_up = $('.pop-up');
        if (!pop_up.is(e.target)) {
            close_pop_up();
        }
    });

</script>
</body>

</html>
