<!-- START HEADER-->
<header class="header bg-white">
    <div class="page-brand">
        <a class="link" href="{{url('dashboard')}}">
            <span class="brand">
                <img src="{{ asset('/images/logo/favicon-logo.png') }}" alt="logo" style="margin-top: 10px" height="50" width="100"/>
            </span>
            <span class="brand-mini">
                <img src="{{ asset('/images/logo/favicon.png') }}" alt="logo" height="25" width="25"/>
            </span>
        </a>
    </div>
    <div class="flexbox flex-1">
        <!-- START TOP-LEFT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li>
                <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
            </li>
        </ul>
        <!-- END TOP-LEFT TOOLBAR-->
        <!-- START TOP-RIGHT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li class="dropdown dropdown-user">
                <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                    <?php $user = \Illuminate\Support\Facades\Auth::user(); ?>
                    <span></span>{{$user->name}}<i class="fa fa-angle-down m-l-5"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{route('home')}}">
                        <i class="fa fa-home"></i> Home
                    </a>
                    <a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                        <i class="fa fa-power-off"></i> Logout
                    </a>
                    <form action="{{route('logout')}}" method="post" id="logoutForm">
                        @csrf
                    </form>
                </ul>
            </li>
        </ul>
        <!-- END TOP-RIGHT TOOLBAR-->
    </div>
</header>
<!-- END HEADER-->
