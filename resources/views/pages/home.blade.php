@extends('layouts.app')

@section('title', content: 'Home')

@section('content')
    <header class="slider-main">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active"
                    style="background-image: url('{{ asset('front/images/slider-02.jpg') }}');">


                    <div class="carousel-caption d-none d-md-block">
                        <h3>Welcome to Zonebiz</h3>
                        <p>A Great Theme For Business Consulting</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('{{ asset('front/images/slider-02.jpg') }}');">

                    <div class="carousel-caption d-none d-md-block">
                        <h3>Best Consulting Services.</h3>
                        <p>A Great Theme For Business Consulting</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('{{ asset('front/images/slider-03.jpg') }}');">

                    <div class="carousel-caption d-none d-md-block">
                        <h3>Welcome to Zonebiz</h3>
                        <p>A Great Theme For Business Consulting</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <div class="services-bar">
        <div class="container">
            <h1 class="py-4">Our Best Services </h1>
            <!-- Services Section -->
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img">
                            <img class="img-fluid" src="front/images/services-img-01.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h4 class="card-header"> Analytics </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                                necessitatibus neque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img">
                            <img class="img-fluid" src="front/images/services-img-02.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h4 class="card-header"> Applications </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                                necessitatibus neque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img">
                            <img class="img-fluid" src="front/images/services-img-03.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h4 class="card-header"> Business Process </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                                necessitatibus neque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img">
                            <img class="img-fluid" src="front/images/services-img-04.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h4 class="card-header"> Consulting </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                                necessitatibus neque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img">
                            <img class="img-fluid" src="front/images/services-img-05.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h4 class="card-header"> Infrastructure </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                                necessitatibus neque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img">
                            <img class="img-fluid" src="front/images/services-img-06.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h4 class="card-header"> Product Engineering </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                                necessitatibus neque.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
@endsection