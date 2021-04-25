<!-- breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        @foreach($links as $link)
            <li class="breadcrumb-item active" aria-current="page">{{ $link }}</li>
        @endforeach
    </ol>
</nav>
<!-- //breadcrumb -->
