@extends('layouts.app')

@section('title')
    {{ __('############') }}    
@endsection

@section('body_content')

<div class="container">
    <div class="card mb-3" style="min-height: 40vh">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage/podcasts/'.$podcast->podcast_image_name) }}" alt="podcast_image" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title"><center><i class="fa fa-music me-2"></i>{{ $podcast->title }} <br><span id="span" hidden>{{ asset('storage/podcasts/'.$podcast->podcast_audio_name) }}</span></center></h4>
                    <p class="card-text">"{{ $podcast->description }}"</p>
                    <div>
                        <!-- <center>
                            <div class="middle">
                                <button onclick="previous_song()" id="pre"><i class="fa fa-step-backward" aria-hidden="true"></i></button>
                                <button onclick="play_audio()" id="play"><i class="fa fa-play" aria-hidden="true"></i></button>
                                <button onclick="pause_audio()" id="pause"><i class="fa fa-pause" aria-hidden="true"></i></button>
                                <button onclick="next_song()" id="next"><i class="fa fa-step-forward" aria-hidden="true"></i></button>
                            </div>


                            <div class="volume">
                                <p id="volume_show">80</p>
                                <i class="fa fa-volume-up" aria-hidden="true" onclick="mute_sound()" id="volume_icon"></i>
                                <input type="range" min="0" max="100" value="80" onchange="volume_change()" id="volume">  
                            </div>

                            <div class="duration">
                                <input type="range" min="0" max="100" value="0" id="duration_slider" onchange="change_duration()">
                            </div>
                        </center> -->
                        <center>
                            <audio id="myAudio" controls autoplay controlsList="nodownload">
                                <source src="{{ asset('storage/podcasts/'.$podcast->podcast_audio_name) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                            <p id="demo"></p>
                        </center>



                    </div>
                    <p class="card-text"><center><small class="text-muted">Uploaded on {{ $podcast->created_at->format('D, d/m/Y h:i:s A') }}</small></center></p>
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