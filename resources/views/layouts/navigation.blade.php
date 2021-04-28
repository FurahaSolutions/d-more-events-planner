<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/index">
        <x-application-logo class="col-1"/>
        D-more E-Planner
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li {{ $attributes->class(['nav-item', 'active' => request()->routeIs('index')]) }}>
                <a class="nav-link" href="/">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li {{ $attributes->class(['nav-item', 'active' => request()->routeIs('about')]) }}>
                <a class="nav-link" href="/about">About</a>
            </li>
            <li {{ $attributes->class(['nav-item','dropdown', 'active' => request()->routeIs('event')]) }}>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    Events
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-center" href="/events/stories">Wedding</a>
                    <a class="dropdown-item text-center" href="/events/typography">Harambee</a>
                </div>
            </li>
            <li {{ $attributes->class(['nav-item', 'active' => request()->routeIs('contact')]) }}>
                <a class="nav-link" href="/contact">Contact</a>
            </li>
        </ul>
        <form action="#"
              method="post" {{ $attributes->class(['form-inline', 'my-2', 'my-lg-0', 'search', 'mx-lg-auto' => request()->routeIs('index')]) }}>
            <input class="form-control mr-sm-2" type="search" placeholder="Search here..." name="Search"
                   required="">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    @if (Route::has('login'))
        <div style="position: absolute; right: 10px; top: 0">
            @auth

                <span {{ $attributes->class(['dropdown']) }}>
                    <a class="dropdown-toggle" href="#" id="navbarDropdownUser" role="button"
                       data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownUser">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                             <x-responsive-nav-link onclick="this.closest('form').submit();return false;" :href="route('logout')">Logout</x-responsive-nav-link>
                         </form>
                    </div>
                </span>
            @else
                <a class="mr-3 mr-lg-4" href="/login">Login</a>
                <a class="mr-4" href="/register">Register</a>
            @endauth
        </div>
    @endif

</nav>
