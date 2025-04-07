@extends('layouts.layout')

@section('title', 'ADOS-2')

@section('content')

    <!-- Theme Header Start -->
    <header id="home" class="full-height bg-img" data-src="images/bg/trees.webp">
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
                                            class="primary-color">ADOS-2</span></h1>
                                </div>
                                <a class="btn btn-default btn-xl stark-animated animated" href="#ados"
                                   data-animation="bounceInDown" data-animation-duration="1.5s"
                                   data-animation-delay="1000">
                                    Dowiedz się więcej
                                </a> <!-- THEME DEFAULT BUTTON -->
                            </div>
                        </div><!-- .header-content -->
                    </div><!-- .item -->
                    <div class="item">
                        <div class="header-content col-sm-12">
                            <div class="header-content-inner text-center">
                                <div class="section-title">
                                    <h1 class="section-title-divider stark-animated animated"
                                        data-animation="lightSpeedIn"
                                        data-animation-duration="2.5s">Badanie <span
                                            class="primary-color">dorosłych</span>
                                        w kierunku autyzmu</h1>
                                </div>
                                <a class="btn btn-default btn-xl stark-animated animated" href="#ados"
                                   data-animation="bounceInDown" data-animation-duration="1.5s"
                                   data-animation-delay="1000">
                                    Dowiedz się więcej
                                </a> <!-- THEME DEFAULT BUTTON -->
                            </div>
                        </div><!-- .header-content -->
                    </div><!-- .item -->
                </div><!-- .owl-carousel -->
            </div>
        </div>
    </header>
    <!-- Theme Header End -->

    <section id="ados" class="section-parallax section-typo-white" data-src="images/bg/3.png"
             data-stellar-background-ratio="0.5">
        <span class="overlay-section-bg primary-section-bg"></span>
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <div class="section-title">
                        <h2 class="section-title-divider">Diagnoza ADOS-2 w Krakowie</h2>
                        <p>
                            Diagnoza zaburzeń ze spektrum autyzmu (ASD)
                        </p>
                    </div>
                    <a class="btn btn-default btn-xl btn-bg-white" href="#proces">Proces badania dzieci i młodzieży</a>
                    <a class="btn btn-default btn-xl btn-bg-white" href="#proces-dorosli">Proces
                        badania dorosłych</a>
                    <a class="btn btn-default btn-xl btn-bg-white margin-lr-50"
                       href="#proces"
                       data-toggle="modal"
                       data-target="#ados-opis"
                    >
                        Czym jest ADOS-2?</a>

                </div>
            </div>
        </div>
    </section>

    @include('partials.combined')

    @include('partials.proces')


@endsection
