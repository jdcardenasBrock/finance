<x-guest-layout>
<div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">
        
        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="/">Finance Mcardi</a>
            </div>
            <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have an account? <a href="sign-up.html">Sign Up</a></p>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="auth-credentials m-b-xxl">
                    <label for="signInEmail" class="form-label">Email address</label>
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />

                    <label for="signInPassword" class="form-label">Password</label>
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>
                <div class="block mt-4 pb-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="auth-submit">
                    <x-button class="btn btn-primary">
                    {{ __('Log in') }}
                    </x-button>
                     @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="auth-forgot-password float-end">Forgot password?</a>
                    @endif
                </div>
                <div class="divider"></div>
                <div class="auth-alts">
                    <a href="#" class="auth-alts-google"></a>
                    <a href="#" class="auth-alts-facebook"></a>
                    <a href="#" class="auth-alts-twitter"></a>
                </div>
            </form> 
        </div>
    </div>
</x-guest-layout>




