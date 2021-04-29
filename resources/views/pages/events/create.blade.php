<x-shell>
    <div class="banner inner-banner" id="home">
        <x-header page="events"/>
        <h1 class="inner-title-agileits-w3layouts">{{ __('Create new event') }}</h1>
    </div>
    <x-breadcrumb></x-breadcrumb>
    <x-auth-validation-errors></x-auth-validation-errors>
    <form action="/events" method="post">
        @csrf
        <div class="d-flex flex-wrap justify-content-between mt-3">
            <div class="form-group col-lg-6 d-flex flex-wrap justify-content-between">
                <label class="col-form-label col-4" for="name">Event Name</label>
                <div class="col-lg-8">
                    <input name="name" class="form-control" id="name" placeholder="Event Name">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <div class="col-lg-2 col-md-3 col-sm-4 m-2">
                <input class="btn btn-primary btn-block" type="submit" value="Submit">
            </div>
        </div>
    </form>
</x-shell>
