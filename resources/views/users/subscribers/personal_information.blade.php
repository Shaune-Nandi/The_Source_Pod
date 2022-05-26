@extends('layouts.app')

@section('title')
    {{ __('User Profile') }}
@endsection

@section('body_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card py-2 ps-4">
                <div class="card-header"><center><h2>{{ __('Personal Information') }}</h2></center></div>

                <div class="card-body">
                    <form method="POST" action="/subscriber/{{ Auth::user()->id }}/personal_information" id="form_data">
                        @csrf
                        <div class="row mb-4">
                            <label for="first_name" class="col-md-2 col-form-label text-md-end">{{ __('First Name:') }}</label>

                            <div class="col-md-3">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ $user->first_name }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="last_name" class="col-md-2 col-form-label text-md-end">{{ __('Last Name:') }}</label>

                            <div class="col-md-3">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $user->last_name }}" required autocomplete="last_name">

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="email" class="col-md-2 col-form-label text-md-end">{{ __('Email:') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" readonly>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-md-2 col-form-label text-md-end">{{ __('Date Joined:') }}</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="date_joined" value="{{ $user->created_at }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-0">

                        <div class="col-md-2 col-form-label text-md-end" style="height: 0px;"></div>

                            <div class="col-md-8">
                                <center>
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save Changes') }}
                                    </button>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



