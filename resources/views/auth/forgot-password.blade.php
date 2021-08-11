<x-structure.layout>
    <x-structure.auth-navbar />

    <main class="main-content bg-default">
        <x-structure.auth-header text="Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one." />

        <x-structure.auth-form-container text="Enter your Email to Reset your Password">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form role="form" method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <x-input id="email" class="form-control" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
                </div>
            </div>
                <div class="text-center">
                    <x-button class="btn btn-primary mt-4">
                        {{ __('Email Password Reset Link') }}
                    </x-button>
                </div>
        </form>
        </x-structure.auth-form-container>
    </main>
    <x-structure.auth-footer />

</x-structure.layout>
