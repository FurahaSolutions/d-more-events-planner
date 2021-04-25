<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/index">D-more E-Planner</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li {{ $attributes->class(['nav-item', 'active' => $page === 'index']) }}>
                    <a class="nav-link" href="/">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li {{ $attributes->class(['nav-item', 'active' => $page === 'about']) }}>
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li {{ $attributes->class(['nav-item', 'active' => $page === 'gallery']) }}>
                    <a class="nav-link" href="/gallery">Gallery</a>
                </li>
                <li {{ $attributes->class(['nav-item','dropdown', 'active' => $page === 'about']) }}>
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
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
            <form action="#" method="post" {{ $attributes->class(['form-inline', 'my-2', 'my-lg-0', 'search', 'mx-lg-auto' => $page === 'index']) }}>
                <input class="form-control mr-sm-2" type="search" placeholder="Search here..." name="Search"
                       required="">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>