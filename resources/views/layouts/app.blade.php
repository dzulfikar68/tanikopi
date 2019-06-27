<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tanikopi') }}</title>

    <!-- Icons -->
    <link href="image/favicon.png" rel="icon">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        body {
            padding-top : 0px
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:rgba(0,0,0,1);">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('image/tanikopi.png') }}" style="height: 33px;"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item" >
                                <a class="nav-link" href="{{ route('login') }}" style="color:#fff">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item" >
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}" style="color:#fff">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="margin-top:20px;margin-bottom:20px;">
            @yield('content')
        </main>
        @include('message')
    </div>
</body>

<script type="text/javascript" src="{{ asset('jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

<script type="text/javascript">
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
</html>
