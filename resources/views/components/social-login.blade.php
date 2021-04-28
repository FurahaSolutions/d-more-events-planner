<div>
    <div class="d-flex justify-content-around flex-wrap">
        @foreach($socialLoginProviders as $provider)
            <div class="col-lg-5 m-3">
                <a href="/auth/redirect/{{ $provider['name'] }}" class="btn btn-primary btn-block btn-lg fa fa-facebook">
                    {{ $provider['name']}}
                </a>
            </div>
        @endforeach
    </div>
</div>
