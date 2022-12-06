<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Inicio</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link type="text/css" href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset ('css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset ('css/swiper.css')}}" rel="stylesheet">
	<link type="text/css" href="{{ asset ('css/styles.css')}}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/570d08161b.js" crossorigin="anonymous"></script>
	
	<!-- Favicon  -->
    <link rel="icon" type="img/ico" href="{{ asset ('images/icono-logo.ico') }}">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarExample">
    
    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href=""><img src="{{ asset ('images/lOGO-SERLAV.png')}}" alt="alternative"></a> 

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.html">Nubis</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

                @if (Route::has('login'))
                <div class="navbar-collapse offcanvas-collapse">
                        <ul class="navbar-nav ms-auto navbar-nav-scroll">
                                @auth
                                <li class="nav-item">
                                    <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                                </li>  
                                @else
                        </ul>
                        <span class="nav-item"> 
                        @if (Route::has('register'))
                            <a href="{{ route('login') }}" class="btn-solid-sm">Iniciar Sesión</a>
                        @endif
                        </span> 
                    @endauth
                </div>
                @endif
        </div> <!-- end of navbar-collapse -->
         <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

      
    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h1 class="h1-large">Conoce nuestros servicios</h1>
                        <p class="p-large">En SERLAV nos caracterizamos por la calidad y cumplimiento en la prestación de nuestros servicios ya que contamos con un excelente recurso humano y equipos adecuados para el tratamiento de sus prendas.</p>
                        <a class="btn-solid-lg" href="#services">Aqui</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset ('images/header-p.svg') }}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    

    <!-- Services -->
    <div id="services" class="cards-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Explore nuestros servicios</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon">
                            <span class="fas fa-headphones-alt"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lavado en Seco</h5>
                            <p>Pregunta por nuestras promociones y combos vigentes</p>
                            <a class="read-more no-line" href="">Learn more <span class="fas fa-long-arrow-alt-right"></span></a>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon red">
                            <span class="far fa-clipboard"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Servicio de Lavanderia</h5>
                            <p>Prendas de Vestir
                                Lencería
                                Ropa Institucional
                                Ropa hotelera</p>
                            <a class="read-more no-line" href="">Learn more <span class="fas fa-long-arrow-alt-right"></span></a>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon green">
                            <span class="far fa-comments"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lavado Tapetes y Cortinas</h5>
                            <p>CONTRIBUIMOS CON EL MEDIO AMBIENTE</p>
                            <a class="read-more no-line" href="">Learn more <span class="fas fa-long-arrow-alt-right"></span></a>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


   


    <!-- Details 2 -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <div class="section-title">ABOUT US</div>
                        <h2>SERLAV</h2>
                        <p>Lavamos tu ropa del modo que desees, nos adaptamos a ti, respondemos a cada una de tus necesidades y así aprovechas al máximo tu tiempo libre ¡Todo esto, cuidando el medio ambiente y sus recursos!</p>
                        <a class="btn-outline-reg" href="">Details</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset ('images/details-2.png')}}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->


    <!-- Features -->
    <div id="features" class="accordion-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="h2-heading">¡Obtén los mejores resultados desde la comodidad de tu casa!</h2>
                    <p class="p-heading">Nosotros hacemos el trabajo por ti. Recogemos donde quieras tus prendas para el proceso de lavado, secado, planchado y doblado. En 24* horas todo estará limpio y como nuevo en tu puerta. Ahorras dinero en el pago de servicios, en la compra de detergentes y evitas la fatiga de lavar o salir y quedar atrapado en un trancón. Así de sencillo: más fácil, más rápido y más momentos para que goces la vida.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->   
            <div class="row">
                <div class="col-xl-5">
                    <div class="accordion" id="accordionExample">
                        
                        <!-- Accordion Item -->
                        <div class="accordion-item">
                            <div class="accordion-icon">
                                <span class="fas fa-tv"></span>
                            </div> <!-- end of accordion-icon -->
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Analyse the product and design plan
                                </button>
                            </div> <!-- end of accordion-header -->
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">Mauris ornare libero et pharetra hendrerit. Cura elementum lectus quis tellus pretium, vitae lobortis dui sagittis aliquam et enim vel semon anticus</div>
                            </div> <!-- end of accordion-collapse -->
                        </div> <!-- end of accordion-item -->
                        <!-- end of accordion-item -->

                        <!-- Accordion Item -->
                        <div class="accordion-item">
                            <div class="accordion-icon blue">
                                <span class="fas fa-microphone"></span>
                            </div> <!-- end of accordion-icon -->
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Find the market opportunities
                                </button>
                            </div> <!-- end of accordion-header -->
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">Mauris ornare libero et pharetra hendrerit. Cura elementum lectus quis tellus pretium, vitae lobortis dui sagittis aliquam et enim vel semon anticus</div>
                            </div> <!-- end of accordion-collapse -->
                        </div> <!-- end of accordion-item -->
                        <!-- end of accordion-item -->

                        <!-- Accordion Item -->
                        <div class="accordion-item">
                            <div class="accordion-icon purple">
                                <span class="fas fa-video"></span>
                            </div> <!-- end of accordion-icon -->
                            <div class="accordion-header" id="headingThree">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Prepare the product launch campaign
                                </button>
                            </div> <!-- end of accordion-header -->
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">Mauris ornare libero et pharetra hendrerit. Cura elementum lectus quis tellus pretium, vitae lobortis dui sagittis aliquam et enim vel semon anticus</div>
                            </div> <!-- end of accordion-collapse -->
                        </div> <!-- end of accordion-item -->
                        <!-- end of accordion-item -->
                        
                        <!-- Accordion Item -->
                        <div class="accordion-item">
                            <div class="accordion-icon orange">
                                <span class="fas fa-tools"></span>
                            </div> <!-- end of accordion-icon -->
                            <div class="accordion-header" id="headingFour">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Evaluate the campaign and adjust
                                </button>
                            </div> <!-- end of accordion-header -->
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">Mauris ornare libero et pharetra hendrerit. Cura elementum lectus quis tellus pretium, vitae lobortis dui sagittis aliquam et enim vel semon anticus</div>
                            </div> <!-- end of accordion-collapse -->
                        </div> <!-- end of accordion-item -->
                        <!-- end of accordion-item -->

                    </div> <!-- end of accordion -->
                </div> <!-- end of col -->
                <div class="col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{asset('images/features-dashboard.png')}}" alt=alternative>
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of accordion-1 -->
    <!-- end of features -->



    
    <!-- Customers -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Trusted by over <span class="blue">5000</span> customers worldwide</h4>
                    <hr class="section-divider">

                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ asset ('images/customer-logo-1.png')}}" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ asset ('images/customer-logo-2.png')}}" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ asset ('images/customer-logo-3.png')}}" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ asset ('images/customer-logo-4.png')}}" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ asset ('images/customer-logo-5.png')}}" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ asset ('images/customer-logo-6.png')}}" alt="alternative">
                                </div>
                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of customers -->



    <!-- Testimonials -->
    <div class="cards-2 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Customer testimonials</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <img class="quotes" src="{{ asset ('/images/quotes.svg') }}" alt="alternative">
                        <div class="card-body">
                            <p class="testimonial-text">Suspendisse vitae enim arcu. Aliqu convallis risus a felis blandit, at mollis nisi bibendum aliquam noto ricos</p>
                            <div class="testimonial-author">Roe Smith</div>
                            <div class="occupation">General Manager, Presentop</div>
                        </div>
                        <div class="gradient-floor red-to-blue"></div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="quotes" src="{{ asset ('/images/quotes.svg') }}" alt="alternative">
                        <div class="card-body">
                            <p class="testimonial-text">Suspendisse vitae enim arcu. Aliqu convallis risus a felis blandit, at mollis nisi bibendum aliquam noto ricos</p>
                            <div class="testimonial-author">Sam Bloom</div>
                            <div class="occupation">General Manager, Presentop</div>
                        </div>
                        <div class="gradient-floor blue-to-purple"></div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="quotes" src="{{ asset ('/images/quotes.svg') }}" alt="alternative">
                        <div class="card-body">
                            <p class="testimonial-text">Suspendisse vitae enim arcu. Aliqu convallis risus a felis blandit, at mollis nisi bibendum aliquam noto ricos</p>
                            <div class="testimonial-author">Bill McKenzie</div>
                            <div class="occupation">General Manager, Presentop</div>
                        </div>
                        <div class="gradient-floor purple-to-green"></div>
                    </div>
                    <!-- end of card -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of testimonials -->

    <!-- Footer -->
    <div class="footer bg-gray">
        <img class="decoration-circles" src="{{ asset ('images/decoration-circles.png')}}" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>If you want to find out which are the right influencers for your product marketing campaigns then follow us</h4>
                    <div class="social-container">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of social-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <ul class="list-unstyled li-space-lg p-small">
                        <li><a href="">Article Details</a></li>
                        <li><a href="">Terms & Conditions</a></li>
                        <li><a href="">Privacy Policy</a></li>
                    </ul>
                </div> <!-- end of col -->
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <p class="p-small statement">Copyright © <a href="#">Your name</a></p>
                </div> <!-- end of col -->

                <div class="col-lg-3 col-md-12 col-sm-12">
                    <p class="p-small statement">Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    

    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src=" {{ asset ('images/up-arrow.png') }} " alt="alternative">
    </button>
    <!-- end of back to top button -->
    	
    <!-- Scripts -->
    <script src="{{ asset ('js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script src="{{ asset ('js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset ('js/scripts.js') }}"></script> <!-- Custom scripts -->
</body>
</html>
