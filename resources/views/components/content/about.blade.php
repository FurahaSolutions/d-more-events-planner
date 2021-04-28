<div class="d-flex justify-content-between">
    @foreach($contents as $content)
        <p class="paragraph-agileinfo col-lg-6">
            {{ __($content['content']) }}
        </p>
    @endforeach
</div>
