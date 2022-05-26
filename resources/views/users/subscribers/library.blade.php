@extends('layouts.app')

@section('title')
    {{ __('Library') }}
@endsection

@section('body_content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card py-2 ps-4">
                <div class="card-header">
                    <center><h2>{{ __('My Library') }}</h2></center>
                    shows that you follow:
                </div>
                
                <div class="card-body">
                    1. The Morning Show <br>
                    2. The Afternoon Show <br>
                    3. Show 3 <br>
                    4. Show 4 <br>
                    5. Show 5 <br>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



