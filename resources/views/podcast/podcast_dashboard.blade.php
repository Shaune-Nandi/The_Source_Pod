@extends('layouts.app')

@section('title')
    {{ __('Podcast Dashboard') }}    
@endsection

@section('body_content')
<style>
    #card_body {
        min-height: 40vh;
    }
</style>


<div class="container">

    <div class="row justify-content-center mb-5 mt-5">
        <a href="{{ route('create_podcast') }}">
            <center><button class="btn btn-success"><h5>Create New Podcast</h5></button></center>           
        </a>
    </div>


    <div class="row">
        <h5 class="mb-4"><center>All Podcasts</center></h5>
        <table class="table table-hover table-dark align-middle mb-0">
            <thead class="bg-dark">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Uploaded By</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($podcast as $podcast)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('storage/podcasts/' . $podcast->time_id . '/' . $podcast->podcast_image_name) }}" alt="podcast_image" style="width: 45px; height: 45px" class="rounded-circle"/>
                            <div class="ms-3">
                                <p class="fw-bold mb-1">{{ $podcast->title }}</p>
                                <!-- <p class="text-muted mb-0">john.doe@gmail.com</p> -->
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">{{ $podcast->description }}</p>
                        <!-- <p class="text-muted mb-0">IT department</p> -->
                    </td>
                    <!-- <td>
                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                    </td> -->
                    <td>
                        {{ $podcast->user->first_name }} {{ $podcast->user->last_name }}
                        <span class="badge badge-success d-inline">Admin</span>
                    </td>
                    <td>
                        <a href="/podcast/{{ $podcast->id }}/play"><button type="button" class="btn btn-primary btn-sm btn-rounded mb-2">Play</button></a>
                        <a href="/podcast/{{ $podcast->id }}/edit"><button type="button" class="btn btn-info btn-sm btn-rounded mb-2">Edit</button></a>
                        <a href="/podcast/{{ $podcast->id }}/delete"><button type="button" class="btn btn-danger btn-sm btn-rounded mb-2">Delete</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br><br>
</div>

@endsection