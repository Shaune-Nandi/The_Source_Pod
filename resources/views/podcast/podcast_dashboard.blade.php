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
    <div class="row justify-content-center">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<table class="table table-dark align-middle mb-0">
    <thead class="bg-dark">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Uploaded By</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($podcast as $podcast)
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('storage/'.$podcast->podcast_image_storage_location) }}" alt="podcast_image" style="width: 45px; height: 45px" class="rounded-circle"/>
                    <div class="ms-3">
                        <p class="fw-bold mb-1">{{ $podcast->title }}</p>{{ asset('storage/'.$podcast->podcast_image_storage_location) }}
                        <!-- <p class="text-muted mb-0">john.doe@gmail.com</p> -->
                    </div>
                </div>
            </td>
            <td>
                <p class="fw-normal mb-1">{{ $podcast->description }}</p>
                <p class="text-muted mb-0">IT department</p>
            </td>
            <td>
                <span class="badge badge-success rounded-pill d-inline">Active</span>
            </td>
            <td>{{ $podcast->user->first_name }} {{ $podcast->user->last_name }}</td>
            <td>
                <button type="button" class="btn btn-link btn-sm btn-rounded">
                Edit
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h2 class="me-auto">{{ __('PODCAST CONTROLS') }}</h2>
                    <a href="/podcast/create"><button class="btn btn-danger ms-auto">Upload Podcast</button></a>
                </div>
                <hr>
                <div class="card-body" id="card_body">
                    <div class="row row-cols-1 row-cols-md-4 g-5">
                        <a href="{{ route('create_podcast') }}">
                            <div class="col">
                                <div class="card h-100 bg-dark">
                                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                                    <div class="card-body">
                                        <h5 class="card-title"><center>Create/Upload Podcast</center></h5>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('update_podcast_view') }}">
                            <div class="col">
                                <div class="card h-100 bg-dark">
                                <!-- <img src="..." class="card-img-top" alt="..."> -->
                                    <div class="card-body">
                                        <h5 class="card-title"><center>Update Podcast</center></h5>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="col">
                                <div class="card h-100 bg-dark">
                                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                                    <div class="card-body">
                                        <h5 class="card-title"><center>Delete Podcast</center></h5>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection