@extends('layouts.app')

@section('body_content')
<style>
    #card_body {
        min-height: 40vh;
    }
</style>


<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-12">
            <div class="card pt-3 pb-5 px-3">
                <h2><center>{{ __('ADMIN DASHBOARD') }}</center></h2>
                <!-- <div class="card-header d-flex">
                     <a href="/podcast/create"><button class="btn btn-danger ms-auto">Upload Podcast</button></a> 
                </div> -->
                <hr>


                <div class="d-flex justify-content-around">
                    <div class="card bg-dark border-bottom border-danger border-5" style="max-width: 20rem;">
                        <a href="{{ route('podcast_dashboard') }}"><center>
                            <div class="d-flex align-items-top" style="max-width: 300px;">
                                <img src="{{ asset('mic_icon.png') }}" class="card-img-top img-fluid" alt="mic_icon">
                            </div>
                            </center>
                            <h4 class="card-header my-4"><center>Podcasts</center></h4>
                        </a>
                    </div>

                    <div class="card bg-dark border-bottom border-danger border-5" style="max-width: 20rem;">
                        <a href="#">
                            <center>
                            <div class="d-flex align-items-top" style="max-width: 300px;">
                                <img src="{{ asset('user_icon.png') }}" class="card-img-top img-fluid" alt="user_icon">
                            </div>
                            </center>
                            <h4 class="card-header my-4"><center>Users</center></h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection