@extends('layouts.login')

@section('content')
<main class="login-container">
    <div class="container">
        <div class="row page-login d-flex align-items-center">
            <div class="section-left col-12 col-md-6 picture-login">
                <h1 class="mb-4">We explore the new <br> much better</h1>
                <img src="/frontend/images/pictures-login.png" alt="" class="w-75 d-none d-sm-flex">
            </div>
            <div class="section-right col-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/frontend/images/logo.png" alt="" class="w-50 mb-4">
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email"
                                    aria-describedby="email" name="email" required value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" required name="password">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember" name="remember" class="form-check-label">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-login btn-block">Sign In</button>
                            
                             @if (Route::has('password.request'))
                             <p class="text-center mt-4">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    <p class=" text-center mt-3">
                                        <a class="btn btn-link" href="{{ route('register') }}">
                                            Register
                                         </a>
                                    </p>
                            </p>      
                                @endif
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
