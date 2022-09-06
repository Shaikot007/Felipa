<!-- Preloading -->
<div id="preloader">
    <div class="spinner">
        <div class="uil-ripple-css" style="transform:scale(0.29);">
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a href="{{route('home')}}" class="custom-logo-link">
            <img src="{{asset('/')}}images/logo-white.png" alt="logo"/>
        </a>
        <a class="sticky-logo" rel="home" href="{{route('home')}}">
            <img src="{{asset('/')}}images/logo-color.png" alt="felipa"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('portfolio')}}">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog')}}">Blog List</a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::user())
                    @if(\Illuminate\Support\Facades\Auth::user()->user_type === "admin")
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('dashboard')}}">Dashboard</a>
                        </li>
                    @endif
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::user())
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                            Sign out
                        </a>
                        <form action="{{route('logout')}}" method="post" id="logoutForm">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Register</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
