<x-structure.layout>

    <x-structure.auth-navbar />

    <main class="main-content bg-default">
        <x-structure.auth-header text="Sign in with your Credentials." />


        <x-structure.auth-form-container text="Sign in with your Credentials">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}" role="form">

                @csrf
                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <x-input id="email" class="form-control" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <x-input id="password" class="form-control"
                                 placeholder="Password"
                                 type="password"
                                 name="password"
                                 required autocomplete="current-password" />
                    </div>
                </div>

                <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id="remember_me" type="checkbox" name="remember" >
                    <label class="custom-control-label" for="remember_me">
                        <span class="text-muted">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="text-center">
                    <x-button class="btn btn-primary my-4">{{ __('Log in') }}</x-button>
                </div>
            </form>
            <div class="row mt-3">
                @if (Route::has('password.request'))
                    <div class="col-6">
                        <a href="{{ route('password.request') }}" class="text-light"><small>{{ __('Forgot your password?') }}</small></a>
                    </div>
                @endif
                <div class="col-6 text-right">
                    <a href="/register" class="text-light"><small>Create new account</small></a>
                </div>
            </div>

        </x-structure.auth-form-container>
    </main>
    <x-structure.auth-footer />
</x-structure.layout>
