<nav
    class="navbar navbar-expand-lg blur border-radius-sm top-0 z-index-3 shadow position-absolute my-3  start-0 end-0 mx-4">
    <div class="container-fluid px-1">
        <a class="navbar-brand font-weight-bolder ms-lg-0 " href="{{ route('dashboard') }}">
       <!-- // <img src="{{ asset('assets/img/logoo2.png') }}" alt="" style="width: 70px; height: 60px;">-->
        Ciments Bizerte
        </a> 
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav mx-auto ms-xl-auto">
{{--           <li class="nav-item">
    <a class="nav-link d-flex align-items-center me-2 {{ request()->routeIs('dashboard') ? 'fw-bold text-dark' : '' }}"
        href="{{ route('dashboard') }}">
        <!-- SVG -->
        Dashboard
    </a>
</li>

<li class="nav-item">
    <a class="nav-link d-flex align-items-center me-2 {{ request()->routeIs('profile') ? 'fw-bold text-dark' : '' }}"
        href="{{ route('profile') }}">
        <!-- SVG -->
        Profile
    </a>
</li> --}}

<li class="nav-item">
    <a class="nav-link d-flex align-items-center me-2 {{ request()->routeIs('signup') ? 'fw-bold text-dark' : '' }}"
        href="{{ route('signup') }}">
        <!-- SVG -->
        Sign Up
    </a>
</li>

<li class="nav-item">
    <a class="nav-link d-flex align-items-center me-2 {{ request()->routeIs('signin') ? 'fw-bold text-dark' : '' }}"
        href="{{ route('signin') }}">
        <!-- SVG -->
        Sign In
    </a>
</li>

            </ul>
        </div>
    </div>
</nav>