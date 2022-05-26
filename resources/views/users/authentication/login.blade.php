@extends('layouts.app')

@section('body_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card py-2 ps-4">
                <center><div class="card-header"><h2>{{ __('Login') }}</h2></div></center>                
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline form-white mb-4">
                            <input name="email" id="email" type="email" class="form-control" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                            <label class="form-label" for="email">{{ __('Email') }}</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline form-white mb-4">
                            <input name="password" id="password" type="password" class="form-control" value="{{ old('password') }}" required/>
                            <label class="form-label" for="password">{{ __('password') }}</label>
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                    <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                                </div>
                            </div>

                            <div class="col">
                                <!-- Simple link -->
                                <a href="#">{{ __('Forgot Your Password?') }}</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <center><button type="submit" class="btn btn-primary mb-4">{{ __('Login') }}</button></center>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Don't have an account? <a href="{{ route('register') }}">{{ __('Register Now') }}</a></p>
                            
                            <!-- <p>or sign up with:</p>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-google"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-github"></i>
                            </button> -->

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
