@extends('layouts.logis')

@section('content')
<div class="form register">
    <div class="form-content">
        <header>Register</header>
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="field input-field">
                <input type="text" name="name" placeholder="Full Name" class="input" value="{{ old('name') }}" required>
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

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

            <div class="field input-field">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="password" required>
                @error('password_confirmation')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-link">
                <a href="{{ route('login') }}" class="forgot-pass">Already have an account? Login</a>
            </div>

            <div class="field button-field">
                <button type="submit">Register</button>
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
