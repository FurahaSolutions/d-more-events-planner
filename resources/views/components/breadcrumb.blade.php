<!-- breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">{{__('Home')}}</a>
        </li>
        @foreach($links as $link)

                @if($link['isLink'])
                <li class="breadcrumb-item" aria-current="{{ __('page') }}">
                    <a href="/{{ $link['link'] }}">{{ __($link['name']) }}</a>
                </li>
                @else
                <li class="breadcrumb-item active" aria-current="{{ __('page') }}">
                    {{ __($link['name']) }}
                </li>

                @endif

        @endforeach
    </ol>
</nav>
<!-- //breadcrumb -->
