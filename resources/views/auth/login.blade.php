@extends('layouts.logis')

@section('content')
<div class="form login">
    <div class="form-content">
        <header>Login</header>
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="field input-field">
                <input type="email" name="email" placeholder="Email" class="input" value="{{ old('email') }}" required>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="field input-field">
                <input type="password" name="password" placeholder="Password" class="password" required>
                <i class='bx bx-hide eye-icon'></i>
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>        

            <div class="form-link">
                <a href="{{ route('password.request') }}" class="forgot-pass">Forgot your password?</a>
            </div>

            <div class="field button-field">
                <button type="submit">Login</button>
            </div>

            <div class="form-link">
                <a href="{{ route('register') }}" class="forgot-pass">Don't have an account? Register</a>
            </div>
        </form>

        <div class="media-options">
            <a href="#" class="field facebook">
                <i class='bx bxl-facebook facebook-icon'></i>
                <span>Login with Facebook</span>
            </a>
        </div>

        <div class="media-options">
            <a href="#" class="field google">
                <img src="{{ asset('bebas/images/google.png') }}" alt="" class="google-img">
                <span>Login with Google</span>
            </a>
        </div>

    </div>
</div>
@endsection
