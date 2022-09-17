<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="navbar-brand">
            <a class="d-flex align-items-center text-decoration-none gap-2" href="{{route('home')}}">
                <img src="{{asset('imgs/logo.png')}}" alt="logo" class="logo" width="50px">
                <h2 class="logo-text text-white m-0 fw-bold text-uppercase">Fishbook</h1>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class='bx bx-menu text-white fs-1'></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-3 mb-2 mb-lg-0">

                <li>
                    <a href="{{route('home')}}" class="nav-link text-white @if(Request::is('home*')) active  @endif">HOME</a>
                </li>
                <li>
                    <a class="nav-link text-white @if(Request::is('about*')) active  @endif" href="{{route('about')}}">ABOUT US</a>
                </li>
                <li>
                    <a class="nav-link text-white @if(Request::is('calculation*', 'round_fish_pond', 'rectangular_fish_pond', 'fish_feeds')) active  @endif" href="{{route('calculation')}}">CALCULATION</a>
                </li>
                <li>
                    <a class="nav-link text-white @if(Request::is('ponds_info*', 'fish_ponds', 'fish_reproduction')) active  @endif" href="{{route('ponds_info')}}">PONDS INFO</a>
                </li>
                <li>
                    <a class="nav-link text-white @if(Request::is('feeds_info*')) active  @endif" href="{{route('feeds_info')}}">FEEDS INFO</a>
                </li>
                @auth
                <li>
                    <a class="nav-link text-white @if(Request::is('profile*')) active  @endif" href="{{route('profile')}}">PROFILE</a>
                </li>

                <li class="nav-item dropdown text-white">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->getUserFullName() }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @if(auth()->user()->is_admin)
                        <a class="dropdown-item" href="{{route('admin.dashboard')}}">
                            Go to admin
                        </a>
                        @endif
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

                @else
                <li>
                    <a class="nav-link text-white @if(Request::is('login*')) active  @endif" href="{{route('login')}}">LOGIN</a>
                </li>
                <li>
                    <a class="nav-link text-white @if(Request::is('register*')) active  @endif" href="{{route('register')}}">REGISTER</a>
                </li>
                @endauth
            </ul>
            <!-- <div class="d-flex gap-2">
                <a href="index.html" class="text-decoration-none">
                    <button class="btn btn-outline-success d-flex align-items-center" type="submit">
                        <i class='bx bx-log-out-circle me-1'></i>
                        Logout
                    </button>
                </a>
            </div> -->
        </div>
    </div>
</nav>
