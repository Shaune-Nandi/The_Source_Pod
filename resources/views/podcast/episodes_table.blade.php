@extends('layouts.app')

@section('body_content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card py-2 ps-4">
                <center><div class="card-header"><h2>{{ $podcast->title }} Episodes</h2></div></center>
                <div class="card-body">
                    <table class="table table-hover table-dark align-middle mt-6 mb-3" id="myTable">
                                <thead class="bg-dark">
                                    <tr>
                                        <th>#ID</th>
                                        <th>Episode Title</th>
                                        <th>Episode Description</th>
                                        <th>Audio File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($podcast->podcastEpisodes as $podcast->podcastEpisodes)
                                    <tr>
                                        <td>{{ $podcast->podcastEpisodes->id }}</td>
                                        <td>{{ $podcast->podcastEpisodes->title }}</td>
                                        <td>{{ $podcast->podcastEpisodes->description }}</td>
                                        <td>{{ $podcast->podcastEpisodes->episode_audio_name }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <a href="/podcast/{{ $podcast->id }}/addEpisodes"><button class="btn btn-success ms-auto">Add Episode</button></a>
                            <a href="/podcast/dashboard"><button class="btn btn-info ms-auto">Complete</button></a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection