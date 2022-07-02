
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
                <h1><strong>THE SOURCE POD</strong></h1>
            </div>
            <div class="d-flex justify-content-center">
                <p class="h5"><center>Building a platform that brings people together to find knowledge, inspiration and interllectual information based on tailored need of the consumer</center></p>
            </div>
        </div>
        <div class="row">
            <div class="d-flex justify-content-center">
                <a href="#"><button class="btn btn-danger py-1"><h5>Start Free Trial</h5></button></a>
            </div>
        </div>
        <br><br><br>
        <div class="row">
            <div class="d-flex justify-content-center">
                <a href="#" class="badge badge-success rounded-pill d-inline me-2 py-2 px-3">SERMONS</a>
                <a href="#" class="badge badge-primary rounded-pill d-inline me-2 py-2 px-3">FINANCES</a>
                <a href="#" class="badge badge-info rounded-pill d-inline me-2 py-2 px-3">RELATIONSHIPS</a>
                <a href="#" class="badge badge-secondary rounded-pill d-inline me-2 py-2 px-3">HACKS</a>
                <a href="#" class="badge badge-danger rounded-pill d-inline me-2 py-2 px-3">YOUNG GENERALS</a>
                <a href="#" class="badge badge-warning rounded-pill d-inline me-2 py-2 px-3">UNDER 40 MILLIONARES</a>
                <a href="#" class="badge badge-info rounded-pill d-inline me-2 py-2 px-3">STORIES</a>
                <a href="#" class="badge badge-primary rounded-pill d-inline me-2 py-2 px-3">INSPIRATIONAL QOUTES</a>
                <a href="#" class="badge badge-warning rounded-pill d-inline me-2 py-2 px-3">MUSLIM TEACHINGS</a>                
            </div>
        </div>
        <br><br><br>
    </div>

    <div class="container-fluid">
        <div class="row bg-dark bg-opacity-75 py-5">
            <h2><center><strong>Why The Source Pod</strong></center></h2>
            <br><br>
            <div class="d-flex justify-content-around">

                <div class="" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <br><br><br>



    <div class="container">
        <h4><center>Highlights</center></h4>
        <div class="row row-cols-1 row-cols-md-2 g-5">

            <div class="col">
                <div class="card bg-dark border-start border-danger border-5 mb-3" >
                    <div class="row g-0">
                        <div class="col-md-4 d-flex align-items-center border-start border-danger border-5">
                            <img src="{{ asset('person_1.gif') }}" class="img-fluid rounded-start" alt="Podcast_image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">uhyugrtdetcfvgbhnj</h5>
                                <p class="card-text">uytrdeswawerdtrfyguh</p>
                                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>



    <br><br><br>

    
    <div class="container-fluid">
        <div class="row bg-dark bg-opacity-75">
            <h2 class="mt-5"><center><strong>Our Team</strong></center></h2>
            <br><br>
            <div class="d-flex justify-content-around">

                <div class="" style="width: 18rem;">
                    <center>
                    <img src="{{ asset('person_1.gif') }}" class="card-img-top rounded-circle" alt="..." style="max-width: 200px">
                    <div class="card-body">
                        <h5 class="card-title">Nique</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    </center>
                </div>

                <div class="" style="width: 18rem;">
                    <center>
                    <img src="{{ asset('person_6.gif') }}" class="card-img-top rounded-circle" alt="..." style="max-width: 200px">
                    <div class="card-body">
                        <h5 class="card-title">Melissa</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    </center>
                </div>

                <div class="" style="width: 18rem;">
                    <center>
                    <img src="{{ asset('person_4.gif') }}" class="card-img-top rounded-circle" alt="..." style="max-width: 200px">
                    <div class="card-body">
                        <h5 class="card-title">Shaune</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    </center>
                </div>
                
            </div>
        </div>
    </div>


    <br><br><br>


    <div class="container">
        <div class="row">
                <h4>BioGraphy</h4><br><br>
                <div class="col-md-6">
                    <h5>vision</h5>"to revolutionize the reading culure into a listening culture" <br><br>
                </div>
                <div class="col-md-6">
                    <h5>Mission</h5>"To create a tool that will evolve the reading culture and bridge the gab between the books and the reader"
                </div>
        </div>
        <br><br><br>



    </div>
    <br><br>
<!-- Footer -->
<footer class="page-footer font-small blue pt-4 bg-dark">
    <div class="container-fluid text-center text-md-left">
        <div class="row">
        <div class="col-md-12 mt-md-0 mt-3">
            <h5 class="text-uppercase">CONTACTS</h5>
            <p>Office: Garden Estate<br>Tel: 0724333479<br>Email: thesourcepod@gmail.com<br>Location: Nairobi</p>
        </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        The Source Pod
    </div>
</footer>

@endsection

