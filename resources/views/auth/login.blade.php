<x-guest-layout>
    <!-- Session Status -->
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <a href="/" class="navbar-brand navbar-brand-autodark">
                <img src="{{ asset('logo-mini.svg') }}" height="36" alt="">
                <span class="d-none d-md-inline">
                    <span class="text-dark">Step</span> <span class="text-primary">Dash</span>
                </span>
            </a>
        </div>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <div class="card card-md">
            <div class="card-body">
                <h2 class="h2 text-center mb-4">Login to your account</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email"
                            class="form-control @error('email')
                            is-invalid
                        @enderror"
                            placeholder="your@email.com" autofocus id="email" name="email" autocomplete="email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <template x-if="form.invalid('email')">
                            <div class="text-danger mt-2 fs-5" x-text="form.errors.email"></div>
                        </template>
                    </div>

                    <div class="mb-2">
                        <label class="form-label">
                            Password
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control" placeholder="Your password"
                                autocomplete="current-password" id="password" name="password">
                            <span class="input-group-text">
                                <div class="link-secondary" title="Show password">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon d-block" width="24"
                                        height="24" @click="show = !show" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
