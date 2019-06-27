<!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
<!--header start-->
<header class="header black-bg">
    <meta name="dicoding:email" content="yasirabd@outlook.com">
    <div class="sidebar-toggle-box">
    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <!--logo start-->
    <a href="{{ url('admin') }}" class="logo"><b>TANI<span>KOPI</span></b></a>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">

    </ul>
    <!--  notification end -->
    </div>
    <div class="top-menu">
    <ul class="nav pull-right top-menu">
        @if(isSuperAdmin())
        <li><a class="logout" href="{{ url('admin/logout') }}">Logout</a></li>
        @else
        <li><a class="logout" href="{{ url('/logout') }}">Logout</a></li>
        @endif
    </ul>
    </div>
</header>
<!--header end-->
