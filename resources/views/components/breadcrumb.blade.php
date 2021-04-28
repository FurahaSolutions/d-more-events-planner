<!-- breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        @foreach($links as $link)
            <li class="breadcrumb-item active" aria-current="page">
                @if($link['isLink'])
                    <a href="/{{ $link['link'] }}">{{ $link['name'] }}</a>
                @else
                    {{ $link['name'] }}
                @endif
            </li>
        @endforeach
    </ol>
</nav>
<!-- //breadcrumb -->
