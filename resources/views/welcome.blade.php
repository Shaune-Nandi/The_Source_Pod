
@extends('layouts.app')

@section('title', 'Welcome')

@section('body_content')
    <style>
        #div {
            min-height:25vh;
            color: white;
        }

        #carousel_wrapper {
            position:absolute;
            z-index:-1;
        }


    </style>

    <div class="container-fluid" id="carousel_wrapper">
        <!-- Carousel wrapper -->
        <div id="carouselMaterialStyle" class="carousel slide" data-mdb-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Inner -->
            <div class="carousel-inner rounded-5 shadow-4-strong">
                <!-- Single item -->
                <div class="carousel-item active" data-mdb-interval="5000">
                    <img src="{{ asset('carousel/Pic_1.jpg') }}" class="d-block w-100" alt="Slide 1" id="img"/>
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item" data-mdb-interval="5000">
                    <img src="{{ asset('carousel/Pic_2.jpg') }}" class="d-block w-100" alt="Slide 2" id="img"/>
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item" data-mdb-interval="5000">
                    <img src="{{ asset('carousel/Pic_3.png') }}" class="d-block w-100" alt="Slide 3" id="img"/>
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
                    </div>
                </div>
            </div>
            <!-- Inner -->

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Carousel wrapper -->
    </div>

    <br><br><br><br><br>

    <div class="container">
        <div class="row" id="div">
            <div class="d-flex justify-content-center">
                <h1>THE SOURCE POD</h1>
            </div>
            <div class="d-flex justify-content-center">
                <p><center>c quam felis, ultricies nec, pellentesque eu, pretium quis, sem. pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla velNulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputat</center></p>
            </div>
        </div>
        <div class="row">
            <div class="d-flex justify-content-center">
                <a href="#"><button class="btn btn-danger py-1"><h5>Start Free Trial</h5></button></a>
            </div>
        </div>
    </div>
@endsection

