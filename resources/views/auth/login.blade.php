<x-shell>
    <div class="banner inner-banner" id="home">
        <x-header page="about"/>
        <h1 class="inner-title-agileits-w3layouts">Login</h1>
    </div>
    <x-breadcrumb :links="['About Us']"></x-breadcrumb>
    <x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">
                <a href="/">
                    <x-application-logo class=""/>
                </a>
            </x-slot>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')"/>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors"/>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card m-2">
                    <div class="card-body">
                        <div class="form-group row">
                            <x-label for="email" :value="__('Email')"/>
                            <div class="col-lg-7">
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                         :value="old('email')" required autofocus/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <x-label for="password" :value="__('Password')"/>
                            <div class="col-lg-7">
                                <x-input id="password" class="block mt-1 w-full"
                                         type="password"
                                         name="password"
                                         required autocomplete="current-password"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-7">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                           name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <x-button class="btn btn-primary">
                                {{ __('Log in') }}
                            </x-button>
                        </div>
                    </div>
                </div>


            </form>
        </x-auth-card>
    </x-guest-layout>
</x-shell>


