<x-shell>
    <div class="banner inner-banner" id="home">
        <x-header page="about"/>
        <h1 class="inner-title-agileits-w3layouts">Register</h1>
    </div>
    <x-breadcrumb :links="$links"></x-breadcrumb>
    <x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">
                <x-social-login />
            </x-slot>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors"/>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <x-label for="name" :value="__('Name')"/>
                            <div class="col-lg-7">
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                         :value="old('name')" required
                                         autofocus/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <x-label for="email" :value="__('Email')"/>
                            <div class="col-lg-7">
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                         required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <x-label for="password" :value="__('Password')"/>
                            <div class="col-lg-7">
                                <x-input id="password" class="block mt-1 w-full"
                                         type="password"
                                         name="password"
                                         required autocomplete="new-password"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <x-label for="password_confirmation" :value="__('Confirm Password')"/>
                            <div class="col-lg-7">
                                <x-input id="password_confirmation" class="block mt-1 w-full"
                                         type="password"
                                         name="password_confirmation" required/>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="d-flex justify-content-between align-items-center mt-2">
                    <a class="text-sm-left" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="mb-2 btn btn-primary">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>
</x-shell>
