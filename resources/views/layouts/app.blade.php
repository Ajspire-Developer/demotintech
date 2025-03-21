<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield(section: 'title') - iFinTech Finance Company</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/all.css') }}">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/jquery.fancybox.min.css') }}">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">


    <link rel="stylesheet" href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('front/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('front/css/jquery.fancybox.min.css') }}">
<link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

</head>
<body>
<div class="wrapper-main">

        <div class="mouse-pointer" style="opacity: 1; left: 249.5px; top: 196.5px;"></div>
        <div class="mouse-pointer" style="left: 249.5px; top: 196.5px; opacity: 1;"></div>


        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="social-media">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-details">
                            <ul>
                                <li><i class="fas fa-phone fa-rotate-90"></i> +01 899 286 777</li>
                                <li><i class="fas fa-map-marker-alt"></i> 8/99 , North Khailkoir, NY</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light top-nav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('front/images/logo.png') }}" alt="logo">
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        
            @yield('content')
        



        <!-- Footer -->
        <footer class="footer">
            <div class="container bottom_border">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <h5 class="headin5_amrc col_white_amrc pt2">About Us</h5>
                        <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <ul class="footer-social">
                            <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="googleplus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <h5 class="headin5_amrc col_white_amrc pt2">Quick Links</h5>
                        <ul class="footer_ul_amrc">
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i> Default Version</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i> Boxed Version</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i> Our Team</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i> About Us</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i> Our Services</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i> Get In Touch</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <h5 class="headin5_amrc col_white_amrc pt2">Follow Us</h5>
                        <ul class="footer_ul2_amrc">
                            <li>
                                <a href="#"><i class="fab fa-twitter fleft padding-right"></i></a>
                                <p>Lorem Ipsum is simply dummy... <a href="#">https://www.lipsum.com/</a></p>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter fleft padding-right"></i></a>
                                <p>Lorem Ipsum is simply dummy... <a href="#">https://www.lipsum.com/</a></p>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter fleft padding-right"></i></a>
                                <p>Lorem Ipsum is simply dummy... <a href="#">https://www.lipsum.com/</a></p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="news-box">
                            <h5 class="headin5_amrc col_white_amrc pt2">Newsletter</h5>
                            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                velit...</p>
                            <form action="#">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Enter email..." type="email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary" type="submit">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <p class="copyright text-center">All Rights Reserved. &copy; 2025 iFinTech. Designed by <a
                        href="https://html.design/">HTML Design</a></p>
            </div>
        </footer>
    </div>

  
    </div>


    <!-- JavaScript Files -->
    <script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>


    </body>
</html>