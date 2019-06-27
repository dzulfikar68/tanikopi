<!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
        <p class="centered"><a href="{{ url('admin/profil') }}"><img src="{{ asset('image/favicon.png') }}" class="img-circle" width="80"></a></p>
        <h5 class="centered">{{ session()->get('name', 'TaniKopi') }}</h5>
        <li class="mt">
        <a href="{{ url('admin/') }}">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
            </a>
        </li>
        <li>
        <a href="{{ url('admin/produk') }}">
            <i class="fa fa-coffee"></i>
            <span>Produk</span>
            </a>
        </li>
        @if(Session::get('role') == 'admin')
        <li>
        <a href="{{ url('admin/koperasi') }}">
            <i class="fa fa-institution"></i>
            <span>Koperasi</span>
            </a>
        </li>
        @endif
        @if(Session::get('role') == 'admin')
        <li>
            <a href="{{ url('admin/admin') }}">
                <i class="fa fa-user"></i>
                <span>Admin</span>
            </a>
        </li>
        @endif
        @if(Session::get('role') == 'admin')
        <li>
        <a href="{{ url('admin/user') }}">
            <i class="fa fa-users"></i>
            <span>User</span>
            </a>
        </li>
        @endif
        <!-- <li class="sub-menu">
        <a href="javascript:;">
            <i class="fa fa-desktop"></i>
            <span>Example</span>
            </a>
        <ul class="sub">
            <li><a href="#">Sample 1</a></li>
            <li><a href="#">Sample 2</a></li>
        </ul>
        </li> -->
    </ul>
    <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
