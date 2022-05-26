@extends('layouts.app')

@section('body_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card py-2 ps-4">
                <center><div class="card-header"><h2>{{ __('Upload Podcast') }}</h2></div></center>                
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Title -->
                                <div class="form-outline form-white mb-4">
                                    <input name="title" id="title" type="text" class="form-control" value="{{ old('title') }}" required/>
                                    <label class="form-label" for="title">{{ __('Title') }}</label>
                                </div>

                                <!-- Description -->
                                <div class="form-outline form-white mb-4">
                                    <textarea name="description" class="form-control" id="description" rows="5" value="{{ old('title') }}" required></textarea>
                                    <label class="form-label" for="description">Description</label>
                                </div>

                                <!-- Posted by user.... -->
                                <div class="form-outline form-white mb-4">
                                    <input name="user" id="user" type="number" value="{{ auth()->user()->id }}" required readonly hidden/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- Podcast Audio -->
                                <label for="podcast_audio" class="form-label">Upload Podcast Here</label>
                                <input class="form-control" type="file" id="podcast_audio" multiple />
                            </div>

                            <!-- Submit button -->
                            <center><button type="submit" class="btn btn-danger mb-4">{{ __('Upload') }}</button></center>
                        </div>
                    </form>
</div>
            </div>
        </div>
    </div>
</div>
@endsection