@extends('layouts.app')

@section('body_content')
<div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h2 class="me-auto">{{ $PodcastCategory->category_name }}</h2>
                </div>
                <hr>
                <div class="card-body" id="card_body">
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                    @foreach ($PodcastCategory->podcasts as $podcast)
                        <div class="col">
                            <a href="/podcast/{{ $podcast->id }}/play" style="text-decoration: none; color: white;">
                                <div class="card bg-dark border-start border-danger border-5 mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4 d-flex align-items-center">
                                            <img src="{{ asset('storage/podcasts/' . $podcast->time_id . '/' . $podcast->podcast_image_name) }}" class="img-fluid rounded-start" alt="Podcast_image">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    {{ $podcast->title }} 
                                                    <!-- <span>$podcast->podcastCategory->category_name</span> -->
                                                </h5>
                                                <p class="card-text">{{ Str::words($podcast->description, 10, '...') }}</p>
                                                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
