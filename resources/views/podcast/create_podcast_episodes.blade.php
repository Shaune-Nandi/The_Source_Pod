@extends('layouts.app')

@section('body_content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card py-2 ps-4">
                <center><div class="card-header"><h2>{{ __('Upload Episodes') }}</h2></div></center>
                <div class="card-body">
                    <form action="/podcast/{{ $podcast->id }}/addEpisodes" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <h5 class="mb-4"><center>Episodes</center></h5>
                            <div class="form-outline form-white mb-4">
                                <input name="episode_title" id="episode_title" type="text" class="form-control" value="{{ old('episode_title') }}" required/>
                                <label class="form-label" for="episode_title">{{ __('Episode Title') }}</label>
                            </div>
                            <div class="form-outline form-white mb-4">
                                <textarea name="episode_description" class="form-control" id="episode_description" rows="3" value="{{ old('episode_description') }}" required></textarea>
                                <label class="form-label" for="episode_description">{{ __('Episode Description') }}</label>
                            </div>
                            <!-- Podcast Audio -->
                            <div class="form-outline form-white">
                                <center><label for="episode_audio" class="form-label" id="label">{{ __('Upload Episode Here') }}</label></center>
                                <input type="file" name="episode_audio" class="form-control" id="episode_audio" accept="audio/*"/>
                            </div>
                            <center><small class="text-danger">{{ __('*** mp3 only ***') }}</small></center>

                            <!-- Submit button -->
                            <center><button type="submit" class="btn btn-success mt-4 mb-6">{{ __('Save') }}</button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection