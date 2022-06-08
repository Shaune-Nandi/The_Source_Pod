@extends('layouts.app')

@section('body_content')
<style>
    #card_body {
        min-height: 40vh;
    }
</style>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            @include('layouts.sidebar_admin')
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex">
                    <h2 class="me-auto">{{ __('ADMIN DASHBOARD') }}</h2>
                    <a href="/podcast/create"><button class="btn btn-danger ms-auto">Upload Podcast</button></a>
                </div>
                <hr>
                <div class="card-body" id="card_body">
                    <h4><center>higyutfrdytufygiuhijlkkje</center></h4>
                    <h6 class="ms-5">Recent uploads</h6>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection