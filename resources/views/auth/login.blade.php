{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}


@include('layouts.header',['title' => "Login"])
<style>
footer{
    display: none;
}
</style>
<body>


    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="display-table">
            <div class="display-table-cell">
                <diV class="container">
                    <div class="">
                        <div class="pt-3">
                            <p class="font-weight-bold h6r text-center px-2" style="font-size: 45px;background:rgba(255, 255, 255, 0.527);border-radius:10px;">Welcome To RMD Food City E-Shopping Platform</p>
                    	</div>
                        <br><br>


                    </div>
                    <div class="row" style="align-items:center;">
                        <div class="col-md-6">
                            <img src="/images/rmd-logo.png" alt="" class="img-fluid logo">
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                
                                    <div class="px-3 pb-3">
                                        <x-jet-validation-errors class="mb-4 login-errors" />

                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                        <form class="form-horizontal m-t-20 mb-0" method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input class="form-control" type="email" id="email" name="email" required="" placeholder="Email">
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input class="form-control" type="password" id="password" name="password" required="" placeholder="Password">
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="remember_me" name="remember">
                                                        <label class="custom-control-label" for="remember_me">Remember me</label>
                                                    </div>
                                                </div>
                                            </div>
                    
                                            <div class="form-group text-right row m-t-20">
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-raised btn-block waves-effect waves-light" type="submit">Log In</button>
                                                </div>
                                            </div>
                    
                                            <div class="form-group m-t-10 mb-0 row">
                                                <div class="col-sm-12 m-t-20"  style="text-align: center">
                                                    <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password ?</a>
                                                </div>
                                              
                                            </div>
                                        </form>
                                    </div>
                    
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </diV>
            </div>
        </div>
    </div>


@include('layouts.footer')