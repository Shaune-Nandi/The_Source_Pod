@extends('layouts.app')

@section('body_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card py-2 ps-4">
                <center><div class="card-header"><h2>{{ __('Upload Podcast') }}</h2></div></center>
                <div class="card-body">
                    <form action="{{ route('upload_podcast') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Title -->
                                <div class="form-outline form-white mb-4">
                                    <input name="title" id="title" type="text" class="form-control" value="{{ old('title') }}" required/>
                                    <label class="form-label" for="title">{{ __('Title') }}</label>
                                </div>

                                <!-- Class -->
                                <div class="form-outline form-white mb-4">
                                    <label for="podcast_category">Select the category:</label>
                                    <select name="podcast_category" id="podcast_category" class="form-select" aria-label="Default select example">
                                        <option>Select class below</option>
                                        @foreach ($podcast_categories as $pod_cat)
                                        <option value="{{ $pod_cat->id }}">{{ $pod_cat->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Description -->
                                <div class="form-outline form-white mb-4">
                                    <textarea name="description" class="form-control" id="description" rows="5" value="{{ old('title') }}" required></textarea>
                                    <label class="form-label" for="description">{{ __('Description') }}</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- Podcast Audio -->
                                <div class="form-outline form-white">
                                    <center><label for="podcast_audio" class="form-label" id="label">{{ __('Upload Podcast Here') }}</label></center>
                                    <input type="file" name="podcast_audio" class="form-control" id="podcast_audio" accept="audio/*"/>
                                </div>

                                <div>
                                    <center><small class="text-danger">{{ __('*** mp3 only ***') }}</small></center>
                                </div>

                                <!-- Upload Images -->
                                <div class="form-outline form-white mb-4 mt-4">
                                    <center><label for="podcast_image" class="form-label" id="label">{{ __('Cover Image') }}</label></center>
                                    <input type="file" name="podcast_image" class="form-control" id="podcast_image" accept="image/*"/>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <center><button type="submit" class="btn btn-success mb-4">{{ __('Upload') }}</button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection