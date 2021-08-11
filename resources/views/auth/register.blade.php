<x-structure.layout>
    <x-structure.auth-navbar />

    <main class="main-content bg-default">
        <x-structure.auth-header text="Sign up with your Credentials to get Started." />

        <x-structure.auth-form-container text="Sign up with your Credentials">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form role="form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                        </div>
                        <x-input id="name" placeholder="Name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-tag"></i></span>
                        </div>
                        <x-input id="username" placeholder="Username" class="form-control" type="text" name="username" :value="old('username')" required autofocus />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <x-input id="email" placeholder="Email" class="form-control" type="email" name="email" :value="old('email')" required />
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
                                 required autocomplete="new-password" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                        </div>
                        <x-input id="password_confirmation" placeholder="Confirm Password" class="form-control"
                                 type="password"
                                 name="password_confirmation" required />
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-12">
                        <div class="custom-control custom-control-alternative custom-checkbox">
                            <x-input id="is_admin" class="custom-control-input"
                                     type="checkbox"
                                     name="is_admin" />
                            <label class="custom-control-label" for="is_admin">
                                <span class="text-muted">Is <a href="#!">Admin ?</a></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <x-button class="btn btn-primary mt-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
                <div class="text-center mt-4">
                    <a class="text-muted" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
            </form>
        </x-structure.auth-form-container>

    </main>
    <x-structure.auth-footer />

</x-structure.layout>
