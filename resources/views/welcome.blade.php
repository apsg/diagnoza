<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- TITLE-->
    <title>Stark</title>
    <!-- FAV ICON -->
    <link rel="shortcut icon" href="images/favicon.ico" type="text/css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive one page HTML template">
    <meta name="author" content="Foxywebthemes">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <!-- FONTAWESOME CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css"/>
    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css"/>
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css"/>
    <!-- LIGHTBOX CSS -->
    <link rel="stylesheet" href="css/lightbox.min.css" type="text/css"/>
    <!-- YTPLAYER CSS -->
    <link rel="stylesheet" href="css/mb.YTPlayer.min.css" type="text/css"/>
    <!-- FLATICON CSS -->
    <link rel="stylesheet" href="css/flaticon.css" type="text/css"/>
    <!-- BOOTSTRAP VALIDATOR CSS -->
    <link rel="stylesheet" href="css/validator.min.css" type="text/css"/>
    <!-- GOOGLE FONTS  -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,100,900|Poppins:400,500'
          rel='stylesheet' type='text/css'/>
    <!-- THEME STYLE CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <!-- Latest IE rendering engine & Chrome Frame Meta Tags -->
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <![endif]-->
    <link rel="stylesheet" id="custom-color-panel" href="colors/dark-green.css" type="text/css">

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" type="text/css">
</head>
<body data-spy="scroll" data-offset="62">

<!-- Page Loader -->
<div class="page-loader"></div>
<!-- Fixed Navbar -->

<div class="main-wrap">

@include('partials.navbar')

<!-- Theme Header Start -->
    <header id="home" class="full-height bg-img" data-src="images/bg/bg-6.png">
        <div class="container-fluid">
            <div class="row">
                <div class="owl-carousel animated-owl-carousel header-slider" data-items="1" data-autoplay="false"
                     data-duration="5000" data-autoplayspeed="500" data-loop="true" data-slideby="1" data-margin="0"
                     data-nav="false" data-dots="true"
                     data-smart-speed="1000" data-left-arrow="fa fa-angle-left" data-animatein="fadeIn"
                     data-animateout="fadeOut" data-right-arrow="fa fa-angle-right">
                    <div class="item">
                        <div class="header-content col-sm-12">
                            <div class="header-content-inner text-center">
                                <div class="section-title">
                                    <h1 class="section-title-divider stark-animated animated"
                                        data-animation="lightSpeedIn"
                                        data-animation-duration="2.5s">Diagnoza <span
                                            class="primary-color">Autyzmu</span></h1>
                                    <p class="stark-animated animated" data-animation="bounceInDown"
                                       data-animation-duration="2s">Start Bootstrap can help you build better websites
                                        using
                                        the Bootstrap CSS framework! Just download your template and start going, no
                                        strings
                                        attached!</p>
                                </div>
                                <a class="btn btn-default btn-xl stark-animated animated" href="#about"
                                   data-animation="bounceInDown" data-animation-duration="1.5s"
                                   data-animation-delay="1000">Find
                                    Out More</a> <!-- THEME DEFAULT BUTTON -->
                            </div>
                        </div><!-- .header-content -->
                    </div><!-- .item -->
                    <div class="item">
                        <div class="header-content col-sm-12">
                            <div class="header-content-inner text-center">
                                <div class="section-title">
                                    <h1 class="section-title-divider stark-animated animated"
                                        data-animation="lightSpeedIn"
                                        data-animation-duration="2.5s">Your <span class="primary-color">Favorite</span>
                                        Design</h1>
                                    <p class="stark-animated animated" data-animation="bounceInDown"
                                       data-animation-duration="2s">Start Bootstrap can help you build better websites
                                        using
                                        the Bootstrap CSS framework! Just download your template and start going, no
                                        strings
                                        attached!</p>
                                </div>
                                <a class="btn btn-default btn-xl stark-animated animated" href="#about"
                                   data-animation="bounceInDown" data-animation-duration="1.5s"
                                   data-animation-delay="1000">Find
                                    Out More</a> <!-- THEME DEFAULT BUTTON -->
                            </div>
                        </div><!-- .header-content -->
                    </div><!-- .item -->
                </div><!-- .owl-carousel -->

            </div>
        </div>
    </header>
    <!-- Theme Header End -->
    <!-- About Section -->
    <section id="about" class="section-parallax section-typo-white" data-src="images/bg/3.png"
             data-stellar-background-ratio="0.5">
        <span class="overlay-section-bg primary-section-bg"></span>
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <div class="section-title">
                        <h2 class="section-title-divider">Diagnoza autyzmu dzieci i młodzieży w Krakowie</h2>
                        <!-- SECTION TITLE -->
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <a class="btn btn-default btn-xl btn-bg-white" href="#">Get Started!</a>
                    <!-- THEME DEFAULT BUTTON WITH WHITE BACKGROUND -->
                </div>
            </div>
        </div>
    </section>
    <!-- Who we are -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-inner">
                        <div class="section-sub-title">
                            <h3 class="under-line">Kim jesteśmy</h3>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut.
                        </p>
                    </div>
                    <div class="col-inner">
                        <div class="section-sub-title">
                            <h3 class="under-line">Zakres badań</h3>
                        </div>
                        <ul class="star-list">
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                            <li>Sed do eiusmod tempor incididunt ut labore et dolore</li>
                            <li>Quis nostrud exercitation ullamco laboris nisi</li>
                            <li>Ut enim ad minim veniam, quis nostrud exercitation</li>
                            <li>Ullamco laboris nisi ut aliquip ex ea</li>
                        </ul>
                    </div>
                    <a class="btn btn-default btn-xl btn-normal margin-top-20" href="#">Read More</a>
                    <!-- THEME DEFAULT BUTTON WITH NORMAL STYLE -->
                </div>
                <div class="col-md-6 hidden-sm hidden-xs media">
                    <img alt="" src="images/about.png" class="img-responsive"/>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End-->
    <!-- Support Section Start -->
    <section class="section-parallax" data-src="images/bg/4.png" data-stellar-background-ratio="0.5">
        <span class="overlay-section-bg black-section-bg"></span>
        <div class="container section-typo-white">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <h2 class="inline-content"><span>Skontaktuj się z nami!</span></h2>
                    <!-- SECTION TITLE -->
                    <a class="btn btn-default btn-xl btn-inline" href="#kontakt">Kontakt</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Support Section End -->
    <!-- Service Section Start -->
    <section class="padding-bottom-50" id="service">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2 class="section-title-divider primary-divider">Zakres badań</h2>
                        <!-- SECTION TITLE -->
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row service-box-wrap">
                <div class="col-md-3 col-sm-6 service-box-col">
                    <figure>
                        <div class="service-image">
                            <i class="flaticon-screen-1"></i>
                        </div>
                    </figure>
                    <h4 class="service-title title-bordered">Diagnoza ADOS</h4>
                    <p class="service-content">Far far away, behind the word mountains, far from the countries Vokalia
                        and
                        Consonantia.</p>
                </div>
                <div class="col-md-3 col-sm-6 service-box-col">
                    <figure>
                        <div class="service-image">
                            <i class="flaticon-smartphone"></i>
                        </div>
                    </figure>
                    <h4 class="service-title title-bordered">Diagnoza klasyczna</h4>
                    <p class="service-content">Far far away, behind the word mountains, far from the countries Vokalia
                        and
                        Consonantia.</p>
                </div>
                <div class="col-md-3 col-sm-6 service-box-col">
                    <figure>
                        <div class="service-image">
                            <i class="flaticon-snowflake"></i>
                        </div>
                    </figure>
                    <h4 class="service-title title-bordered">Konsultacje</h4>
                    <p class="service-content">Far far away, behind the word mountains, far from the countries Vokalia
                        and
                        Consonantia.</p>
                </div>
                <div class="col-md-3 col-sm-6 service-box-col">
                    <figure>
                        <div class="service-image">
                            <i class="flaticon-star"></i>
                        </div>
                    </figure>
                    <h4 class="service-title title-bordered">Obserwacja</h4>
                    <p class="service-content">Far far away, behind the word mountains, far from the countries Vokalia
                        and
                        Consonantia.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section End -->

    <!-- Features Section Start -->
    <section class="padding-bottom-50" id="features">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2 class="section-title-divider primary-divider">Our Features</h2>
                        <!-- SECTION TITLE -->
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row margin-bottom-0">
                <div class="col-sm-4">
                    <div class="media feature-box">
                        <div class="media-left">
									<span class="feature-icon">
									<i class="fa fa-cubes"></i>
									</span>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">UX Design</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="media feature-box">
                        <div class="media-left">
									<span class="feature-icon">
									<i class="fa fa-desktop"></i>
									</span>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">UI Design</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="media feature-box">
                        <div class="media-left">
									<span class="feature-icon">
									<i class="fa fa-bar-chart"></i>
									</span>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Quality Control</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin-bottom-0">
                <div class="col-sm-4">
                    <div class="media feature-box">
                        <div class="media-left">
									<span class="feature-icon">
									<i class="fa fa-fighter-jet"></i>
									</span>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">SEO Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="media feature-box">
                        <div class="media-left">
									<span class="feature-icon">
									<i class="fa fa-server"></i>
									</span>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Server Maintanence</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="media feature-box">
                        <div class="media-left">
									<span class="feature-icon">
									<i class="fa fa-code"></i>
									</span>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Code Develop</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->
    <!-- Counter Section Start -->
    <section class="section-parallax padding-bottom-50" data-src="images/bg/3.png" data-stellar-background-ratio="0.5">
        <span class="overlay-section-bg primary-section-bg"></span>
        <div class="container section-typo-white">
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="counter-wrap">
								<span class="counter-icon">
								<i class="flaticon-user"></i>
								</span>
                        <h3 class="counter" data-counter="9894">
                            9894
                        </h3>
                        <span class="counter-text">
								Wykonanych diagnoz
                        </span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-wrap">
								<span class="counter-icon">
								<i class="flaticon-wallet"></i>
								</span>
                        <h3 class="counter" data-counter="15">
                            15
                        </h3>
                        <span class="counter-text">
								Współpracujących placówek
						</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-wrap">
								<span class="counter-icon">
								<i class="flaticon-trophy"></i>
								</span>
                        <h3 class="counter" data-counter="73">
                            73
                        </h3>
                        <span class="counter-text">
								Winning Awards
								</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-wrap">
								<span class="counter-icon">
								<i class="flaticon-star"></i>
								</span>
                        <h3 class="counter" data-counter="580">
                            580
                        </h3>
                        <span class="counter-text">
								User Reviews
								</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    @include('partials.team')

    <!-- Support Section Start -->
    <section class="section-parallax" data-src="images/bg/2.png" data-stellar-background-ratio="0.5">
        <span class="overlay-section-bg black-section-bg"></span>
        <div class="container section-typo-white">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <h2 class="inline-content"><span>We Are Ready to Coming</span></h2>
                    <!-- SECTION TITLE -->
                    <a class="btn btn-default btn-xl btn-bg-white btn-inline" href="#">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Support Section End -->

@include('partials.pricing')

<!-- Support Section Start -->
    <section class="section-parallax" data-src="images/bg/6.png" data-stellar-background-ratio="0.5">
        <span class="overlay-section-bg primary-section-bg"></span>
        <div class="container section-typo-white">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <h2 class="inline-content"><span>We Are Ready to Coming</span></h2>
                    <!-- SECTION TITLE -->
                    <a class="btn btn-default btn-xl btn-bg-white btn-inline" href="#">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Support Section End -->
    <!-- Testimonial Section Start -->
    <section class="section-parallax section-typo-white" data-src="images/bg/1.png" data-stellar-background-ratio="0.5">
        <span class="overlay-section-bg black-section-bg"></span>
        <div class="container section-typo-white">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <div class="testimonial-wrapper">
                        <div class="owl-carousel white-dots testimonial-slider" data-items="1" data-loop="true"
                             data-slideby="1" data-margin="0" data-nav="false" data-dots="true" data-smart-speed="1000"
                             data-left-arrow="fa fa-angle-left" data-right-arrow="fa fa-angle-right">
                            <div class="testimonial-item">
                                <div class="testimonial-title">
                                    <div class="testimonial-image img-thumbnail">
                                        <img alt="" src="images/testimonial/1.png" class="img-responsive"
                                             title="Testimonial"/>
                                    </div>
                                    <h4>John Doe</h4>
                                    <span>Web Designer and Developer</span>
                                </div>
                                <div class="testimonial-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Far far away, behind the word
                                        mountains, far from the countries.</p>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-title">
                                    <div class="testimonial-image img-thumbnail">
                                        <img alt="" src="images/testimonial/2.png" class="img-responsive"
                                             title="Testimonial"/>
                                    </div>
                                    <h4>Selena Gomez</h4>
                                    <span>UI Designer and Developer</span>
                                </div>
                                <div class="testimonial-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Far far away, behind the word
                                        mountains, far from the countries.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

@include('partials.proces')

<!-- Subsribe Section Start -->
    <section class="section-parallax" data-src="images/bg/7.png" data-stellar-background-ratio="0.5">
        <span class="overlay-section-bg black-section-bg"></span>
        <div class="container section-typo-white">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 text-center">
                    <div class="subscribe-form">
                        <p id="subscribe-status-msg" class="hide"></p>
                        <form id="subscribe-form" class="subscribe-form" action="inc/function.php">
                            <div class="input-group subscribe-box">
                                <input type="text" class="form-control" name="mcemail" autocomplete="off" id="mcemail"
                                       placeholder="Email">
                                <span class="input-group-btn">
										<button class="btn btn-default white-border typo-gray subscribe-btn"
                                                type="submit">Subscribe</button>
										</span>
                            </div>
                            <!-- /input-group -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subsribe Section End -->
    <!-- Contact Section Start -->
    <section class="contact-section" id="kontakt">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="section-title">
                        <h2 class="section-title-divider primary-divider">Contact Us</h2>
                        <!-- SECTION TITLE -->
                        <p>
                            Zostaw swoje dane kontaktowe oraz cel kontaktu (np. diagnoza ADOS, konsultacja itp.) -
                            odpiszemy lub oddzwonimy do Ciebie!
                            Prosimy <strong>nie opisywać problemów ani nie zostawiać danych osobowych dziecka</strong> w
                            formularzu - te
                            dane zbierzemy w bezpieczniejszy sposób.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="contact-adress">
                        <p class="contact-icons"><i class="fa fa-map-marker primary-color"></i></p>
                        <div class="padding-tb-20">
                            <p>
                                132, Snow Street,<br/>
                                London, 89785
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-mail">
                        <p class="contact-icons"><i class="fa fa-envelope-o primary-color"></i></p>
                        <div class="padding-tb-20">
                            <p>info@companyname.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-number">
                        <p class="contact-icons"><i class="fa fa-phone primary-color"></i></p>
                        <div class="padding-tb-20">
                            <p>
                                +44 222 1234<br/>
                                +44 222 2341
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="contact-form">
                    <p id="contact-status-msg" class="hide"></p>
                    <form id="contact-form" class="contact-form" action="inc/function.php">
                        <div class="col-md-4 col-md-offset-2 padding-bottom-20">
                            <div class="form-group">
                                <input id="name" class="form-control" name="name" autocomplete="off" placeholder="Name"
                                       data-bv-field="name" type="text"/>
                            </div>
                        </div>
                        <div class="col-md-4 padding-bottom-20">
                            <div class="form-group">
                                <input id="email" class="form-control" name="email" autocomplete="off"
                                       placeholder="E-mail"
                                       data-bv-field="email" type="email">
                            </div>
                        </div>
                        <span class="clearfix"></span>
                        <div class="contact-message col-md-8 col-md-offset-2">
                            <div class="form-group margin-bottom-0">
                            <textarea id="message" class="form-control textarea" rows="3" name="message"
                                      placeholder="Message" data-bv-field="message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 padding-top-30">
                            <button type="submit" class="btn btn-default btn-xl btn-normal margin-top-20 contact-btn">
                                Send a
                                Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
    <!-- Map Section Start -->
    <section class="padding-none">
        <!-- Map Styles -> Standard, Aubergine, Silver, Retro, Dark, Aubergine -->
        <div id="starkGoogleMap" style="width:100%;height:400px;" data-map-style="Silver"></div>
    </section>
    <!-- Map Section End -->
    <!-- Our Clients Section Start -->
    <section class="padding-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="client-slider-wrap">
                        <div class="owl-carousel client-slider" data-items="5" data-loop="true" data-margin="30"
                             data-nav="false" data-slideby="1" data-dots="false" data-smart-speed="1000"
                             data-left-arrow="fa fa-angle-left" data-right-arrow="fa fa-angle-right">
                            <div class="client-item">
                                <a href="#"><img alt="" class="img-responsive" src="images/clients/1.png"/></a>
                            </div>
                            <div class="client-item">
                                <a href="#"><img alt="" class="img-responsive" src="images/clients/2.png"/></a>
                            </div>
                            <div class="client-item">
                                <a href="#"><img alt="" class="img-responsive" src="images/clients/3.png"/></a>
                            </div>
                            <div class="client-item">
                                <a href="#"><img alt="" class="img-responsive" src="images/clients/4.png"/></a>
                            </div>
                            <div class="client-item">
                                <a href="#"><img alt="" class="img-responsive" src="images/clients/5.png"/></a>
                            </div>
                            <div class="client-item">
                                <a href="#"><img alt="" class="img-responsive" src="images/clients/6.png"/></a>
                            </div>
                            <div class="client-item">
                                <a href="#"><img alt="" class="img-responsive" src="images/clients/7.png"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Clients Section End -->
    <!-- Footer Start -->
    <footer class="footer padding-tb-30 primary-section-bg section-typo-white">
        <div class="container">
            <div class="row text-center margin-bottom-20">
                <div class="col-md-12">
                    <ul class="nav navbar-nav footer-social">
                        <li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="social-pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" class="social-google-plus"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <p class="copyright-text">Copyright &copy; 2017 Start. Designed by <a
                            href="https://wpthemedevelopers.com/">Foxy Web Themes</a></p>
                </div>
            </div>
        </div>
        <a href="#" class="back-to-top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
    </footer>
    <!-- Footer End -->

</div><!-- .main-wrap -->

<!-- JQUERY LIBRARY -->
<script src="js/jquery.min.js"></script>
<!-- BOOTSTRAP JS -->
<script src="js/bootstrap.min.js"></script>
<!-- OWL CAROUSEL JS -->
<script src="js/owl.carousel.min.js"></script>
<!-- APPEARS JS -->
<script src="js/jquery.appear.js"></script>
<!-- EASING JS -->
<script src="js/jquery.easing.min.js"></script>
<!-- STELLAR JS -->
<script src="js/jquery.stellar.min.js"></script>
<!-- COUNTER JS -->
<script src="js/jquery.counterup.min.js"></script>
<!-- ISOTOPE JS -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- LIGHTBOX JS -->
<script src="js/lightbox.min.js"></script>
<!-- YTPLAYER JS -->
<script src="js/jquery.mb.YTPlayer.min.js"></script>
<!-- BOOTSTRAP VALIDATOR JS -->
<script src="js/validator.min.js"></script>
<!-- THEME JS -->
<script src="js/theme.js"></script>
<!-- GOOGLE MAP INIT JS -->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtkY02zM_XV3XtSzJbNwJdiA2iuNmP_bI&callback=initStarkContact"
        type="text/javascript"></script>

<script src="{{ asset('/js/app.js') }}"></script>

</body>
</html>
