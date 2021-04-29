<x-app-layout>
    <x-slot name="header">{{ __('My Dashboard') }}</x-slot>
    <div class="container-fluid">
        <div class="d-flex justify-content-end mt-2">
            <a href="/events/create" class="btn btn-primary">
                New event
            </a>
        </div>
        <div class="alert alert-info mt-2">
            You do not have any events yet!
        </div>
    </div>
</x-app-layout>
