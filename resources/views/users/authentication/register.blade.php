@extends('layouts.app')

@section('body_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card py-2 ps-4">
                <div class="card-header"><center><h2>{{ __('Register') }}</h2></center></div>

                <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- First Name -->
                        <div class="form-outline form-white mb-4">
                            <input name="first_name" id="first_name" type="first_name" class="form-control" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus/>
                            <label class="form-label" for="first_name">{{ __('First Name') }}</label>
                        </div>

                        <!-- Last Name -->
                        <div class="form-outline form-white mb-4">
                            <input name="last_name" id="last_name" type="last_name" class="form-control" value="{{ old('last_name') }}" required autocomplete="last_name"/>
                            <label class="form-label" for="last_name">{{ __('Last Name') }}</label>
                        </div>

                        <!-- Email -->
                        <div class="form-outline form-white mb-4">
                            <input name="email" id="email" type="email" class="form-control" value="{{ old('email') }}" required autocomplete="email"/>
                            <label class="form-label" for="email">{{ __('Email') }}</label>
                        </div>

                        <!-- Password -->
                        <div class="form-outline form-white mb-4">
                            <input name="password" id="password" type="password" class="form-control" required/>
                            <label class="form-label" for="password">{{ __('Password') }}</label>
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-outline form-white mb-4">
                            <input name="password_confirmation" id="password_confirmation" type="password" class="form-control" required/>
                            <label class="form-label" for="password_confirmation">{{ __('Confirm Password') }}</label>
                        </div>

                        <!-- Submit button -->
                        <center><button type="submit" class="btn btn-primary mb-4">{{ __('Register') }}</button></center>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Or <a href="{{ route('login') }}">{{ __('login') }}</a> if you already have an account</p>
                            
                            <!-- <p>or sign in with:</p>
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
