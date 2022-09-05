<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div class="admin-info">
                <div class="font-strong">Admin panel</div>
                <small>Administrator</small>
            </div>
        </div>
        <ul class="side-menu metismenu">
            <li class="heading">FEATURES</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-sticky-note"></i>
                    <span class="nav-label">Blog</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('blogs.index')}}">Add blog</a>
                    </li>
                    <li>
                        <a href="{{route('blogs.create')}}">Manage blog</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-newspaper-o"></i>
                    <span class="nav-label">Subscriber</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('subscribers.index')}}">Add subscriber</a>
                    </li>
                    <li>
                        <a href="{{route('subscribers.create')}}">Manage subscriber</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- END SIDEBAR-->
