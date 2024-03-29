@extends('layouts.app')

@section('body_content')
<style>
    #card_body {
        min-height: 40vh;
    }
</style>


<div class="container-fluid">
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
                    <h4><center>User analytics & additional details here</center></h4>
                    <h6 class="ms-5">Recent uploads</h6>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card bg-dark border-start border-danger border-5 mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="..." class="img-fluid rounded-start" alt="Podcast_image">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">((podcast Name))</h5>
                                            <p class="card-text">((podcast Description)) This isg text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection