
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
                        <p>Lorem ipsum dolor sit ametjhh, consectetur adipiscing elit.</p> -->
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

    <br><br><br>

    <div class="container">
        <div class="row" id="div">
            <div class="d-flex justify-content-center">
                <h1><strong>THE SOURCE POD</strong></h1>
            </div>
            <div class="d-flex justify-content-center">
                <p class="h5"><center>Building a platform that brings people together to find knowledge, inspiration and interllectual information based on tailored need of the consumer</center></p>
            </div>
        </div>
        <!-- <div class="row">
            <div class="d-flex justify-content-center">
                <a href="#"><button class="btn btn-danger py-1"><h5>Start Free Trial</h5></button></a>
            </div>
        </div> -->
        <br><br><br>

    </div>

    <div class="container-fluid">
        <div class="row bg-opacity-75 py-5">
            <h2><center><strong>Why The Source Pod</strong></center></h2>
            <br><br>
            <div class="d-flex justify-content-around">

                <div class="" style="width: 18rem;">
                    <img src="..." class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Title_1</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.  Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                    </div>
                </div>
            
                <div class="" style="width: 18rem;">
                    <img src="..." class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Title_2</h5>
                        <p class="card-text">Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                    </div>
                </div>

                
                
            </div>
        </div>
    </div>

    <br><br><br>



    <div class="container">
        <h4><center>Highlights</center></h4>
        <br>
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
        <br><br>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($podcast_highlights as $podcast_highlights)
            <div class="col">
                <div class="card bg-dark border-start border-danger border-5 mb-3" >
                    <div class="row g-0">
                        <div class="col-md-4 d-flex align-items-center border-start border-danger border-5">
                            <img src="{{ asset('pod_1.jpg') }}" class="img-fluid rounded-start" alt="Podcast_image" style="max-height: 180px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $podcast_highlights->title }}</h5>
                                <p class="card-text">{{ $podcast_highlights->description }}</p>
                                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



            
           
            
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
                        <p class="card-text">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam dictum felis eu pede mollis pretium.</p>
                    </div>
                    </center>
                </div>

                <div class="" style="width: 18rem;">
                    <center>
                    <img src="{{ asset('person_6.gif') }}" class="card-img-top rounded-circle" alt="..." style="max-width: 200px">
                    <div class="card-body">
                        <h5 class="card-title">Melissa</h5>
                        <p class="card-text">Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                    </div>
                    </center>
                </div>

                <div class="" style="width: 18rem;">
                    <center>
                    <img src="{{ asset('person_4.gif') }}" class="card-img-top rounded-circle" alt="..." style="max-width: 200px">
                    <div class="card-body">
                        <h5 class="card-title">Shaune</h5>
                        <p class="card-text">Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
                    </div>
                    </center>
                </div>

                <div class="" style="width: 18rem;">
                    <center>
                    <img src="{{ asset('person_4.gif') }}" class="card-img-top rounded-circle" alt="..." style="max-width: 200px">
                    <div class="card-body">
                        <h5 class="card-title">Doreen</h5>
                        <p class="card-text">Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
                    </div>
                    </center>
                </div>

                <!-- <div class="" style="width: 18rem;">
                    <center>
                    <img src="{{ asset('person_4.gif') }}" class="card-img-top rounded-circle" alt="..." style="max-width: 200px">
                    <div class="card-body">
                        <h5 class="card-title">Business</h5>
                        <p class="card-text">Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
                    </div>
                    </center>
                </div> -->
                
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
    </div>


    <br><br>



<!-- Footer -->
<footer class="page-footer font-small blue pt-4 bg-dark">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">CONTACTS</h5>
        <p>Office: Garden Estate<br>Tel: 0724333479<br>Email: thesourcepod@gmail.com<br>Location: Nairobi</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <br>
<center>
    <a class="ins-ic mx-3">
        <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
    </a>

    <a class="gplus-ic mx-3">
            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>

    <a class="gplus-ic mx-3">
          <i class="fa-brands fa-youtube"></i>
          </a>




</center>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="/">
        The Source Pod
    </a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


@endsection

