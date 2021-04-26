@props(['page', 'href'])

<li {{ $attributes->class(['nav-item', 'active' => request()->routeIs($page)]) }}>
    <a class="nav-link" href="/">Home
        <a class="nav-link" href="{{ $href }}">
            {{ $slot }}
        </a>
    </a>
</li>
