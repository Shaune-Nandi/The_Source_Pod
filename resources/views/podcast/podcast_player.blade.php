@extends('layouts.app')

@section('title')
    {{ __('Player') }}    
@endsection

@section('body_content')

<div class="container">
    <div class="card mb-3" style="min-height: 40vh">
        <div class="row g-0 pt-3">
            <h4 class="card-title"><center><i class="fa fa-music me-2"></i>{{ $podcast->title }} <br><span id="span" hidden>{{ asset('storage/podcasts/'.$podcast->podcast_audio_name) }}</span></center></h4><hr>
            <center>
                <audio id="myAudio" controls autoplay controlsList="nodownload">
                    <source src="{{ asset('storage/podcasts/'.$podcast->podcast_audio_name) }}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                <p id="demo"></p>
            </center>
            <div class="col-md-5">
                <h5><center>Episodes</center></h5>
                @foreach ($podcast->podcastEpisodes as $podcast->podcastEpisodes)
                    <div class="mx-3">{{ $podcast->podcastEpisodes->id }} - {{ $podcast->podcastEpisodes->title }}</div>
                    <hr>
                @endforeach
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <center>
                    <div style="max-width: 500px;"><img src="{{ asset('storage/podcasts/' . $podcast->time_id . '/' . $podcast->podcast_image_name) }}" alt="podcast_image" class="img-fluid rounded-start"></div>
                    <br>
                    <p class="card-text">"{{ $podcast->description }}"</p>
                    <!-- <p class="card-text"><small class="text-muted">Uploaded on {{ $podcast->created_at->format('D, d/m/Y h:i:s A') }}</small></p> -->
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

<script>


    let previous = document.querySelector('#pre');
    let play = document.querySelector('#play');
    let next = document.querySelector('#next');
    let recent_volume = document.querySelector('#volume');
    let volume_show = document.querySelector('#volume_show');
    let duration_slider = document.querySelector('#duration_slider');
    let show_duration = document.querySelector('#show_duration');
    let present = document.querySelector('#present');
    let total = document.querySelector('#total');

    let audio_location = document.getElementById("span");
    let timer;

function play_audio() {
    var audio = new Audio(audio_location.innerHTML); audio.play();
}
function pause_audio() {
    var audio = new Audio(audio_location.innerHTML); audio.pause();
}


function myFunction() {
  var x = document.getElementById("myAudio").controls;
  document.getElementById("demo").innerHTML = x;
}

    // create an audio element
    let track = document.createElement('audio');

    track.src = +podcast.podcast_image_name
    console.log(track);

    function loadTrack() {
        track.src = podcast.podcast_audio_name
        console.log(track);

    }
</script>

@endsection