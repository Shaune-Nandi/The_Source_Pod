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
            <div class="card">
                <br>
                <h3><center>Controls</center></h3>
                <ul class="nav flex-column">
                <hr>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Users</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Podcasts</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link" href="#">.....</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link" href="#">.....</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link" href="#">.....</a>
                    </li>
                    <br>
                </ul>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex">
                    <h2 class="me-auto">{{ __('ADMIN DASHBOARD') }}</h2>
                    <a href="/podcast/create"><button class="btn btn-danger ms-auto">Upload Podcast</button></a>
                </div>
                <hr>
                <div class="card-body" id="card_body">
                    <h4><center>User analytics here</center></h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection