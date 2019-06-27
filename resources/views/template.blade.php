<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <meta name="dicoding:email" content="yasirabd@outlook.com">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Tanikopi</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="image/favicon.png" rel="icon">
  <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/amoeba/css/isotope.css') }}" media="screen" />
  <link rel="stylesheet" href="{{ asset('bootstrap/amoeba/js/fancybox/jquery.fancybox.css') }}" type="text/css" media="screen" />
  <link rel="stylesheet" href="{{ asset('bootstrap/amoeba/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('bootstrap/amoeba/css/bootstrap-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('bootstrap/amoeba/css/style.css') }}">
  <!-- skin -->
  <link rel="stylesheet" href="{{ asset('bootstrap/amoeba/skin/default.css') }}">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- =======================================================
  Theme Name: Amoeba
  Theme URL: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/
  Author: BootstrapMade
  Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  @include('navbar')
  <!-- <div style="height: 50px; z-index:-100;" class="visible-xs"></div> -->
  @yield('main')

  @include('message')

  @include('footer')


<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

<script src="{{ asset('bootstrap/amoeba/js/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
<script src="{{ asset('bootstrap/amoeba/js/jquery.js') }}"></script>
<script src="{{ asset('bootstrap/amoeba/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('bootstrap/amoeba/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bootstrap/amoeba/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('bootstrap/amoeba/js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('bootstrap/amoeba/js/fancybox/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('bootstrap/amoeba/js/skrollr.min.js') }}"></script>
<script src="{{ asset('bootstrap/amoeba/js/jquery.scrollTo.js') }}"></script>
<script src="{{ asset('bootstrap/amoeba/js/jquery.localScroll.js') }}"></script>
<script src="{{ asset('bootstrap/amoeba/js/stellar.js') }}"></script>
<script src="{{ asset('bootstrap/amoeba/js/jquery.appear.js') }}"></script>
<script src="{{ asset('bootstrap/amoeba/js/main.js') }}"></script>
<script src="{{ asset('bootstrap/amoeba/contactform/contactform.js') }}"></script>
<script>

    // display notification if message not null
    if ($('.pop-up').children().length > 0) {
        $('.pop-up').animate({
            'opacity': 1,
            'right': "30px"
        }, 300).animate({ 'right': "15px" }, 400);

        // close notification by time
        setTimeout(close_pop_up, 7000);
    }
    // close notification function
    function close_pop_up(){
        var width = $('.pop-up').width();
        $('.pop-up').animate({
            'opacity': 0,
            'right': -width
        }, 300, function(){
            $('.pop-up').remove();
        });
    }

    // close notification
    $('.pop-up .close').click(close_pop_up);

    // remove notification when clicked out of target
    $(document).click(function(e) {
        var pop_up = $('.pop-up');
        if (!pop_up.is(e.target)) {
            close_pop_up();
        }
    });

</script>
</body>

</html>
