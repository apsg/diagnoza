<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- FAV ICON -->
    <link rel="shortcut icon" href="images/favicon.ico" type="text/css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive one page HTML template">
    <meta name="author" content="Foxywebthemes">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,100,900|Poppins:400,500'
          rel='stylesheet' type='text/css'/>
    <!-- THEME STYLE CSS -->
    <!-- Latest IE rendering engine & Chrome Frame Meta Tags -->
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <![endif]-->

    <link rel="stylesheet" href="{{ asset('css/theme.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" type="text/css">

    @meta_tags
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QD1TJ1SSYL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-QD1TJ1SSYL');
    </script>
</head>
<body data-spy="scroll" data-offset="62">

<div class="main-wrap" id="app">

@include('partials.navbar')

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
    <!-- About Section -->
    <section id="ados" class="section-parallax section-typo-white" data-src="images/bg/3.png"
             data-stellar-background-ratio="0.5">
        <span class="overlay-section-bg primary-section-bg"></span>
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <div class="section-title">
                        <h2 class="section-title-divider">Diagnoza ADOS-2 w {{ \App\CitiesHelper::get('msc') }}</h2>
                        <!-- SECTION TITLE -->
                        <p>
                            Diagnoza autyzmu
                        </p>
                    </div>
                    <a class="btn btn-default btn-xl btn-bg-white" href="#proces">Zobacz jak przebiega proces
                        badania</a>
                    <a class="btn btn-default btn-xl btn-bg-white margin-lr-50"
                       href="#proces"
                       data-toggle="modal"
                       data-target="#ados-opis"
                    >
                        Czym jest ADOS-2?</a>
                    <!-- THEME DEFAULT BUTTON WITH WHITE BACKGROUND -->


                </div>
            </div>
        </div>
    </section>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel" aria-hidden="true" id="ados-opis">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-left">
                    <p><strong>ADOS 2</strong> - (Autism Diagnosis Observation Schedule), czyli protokół obserwacji do
                        diagnozy zaburzeń ze spektrum autyzmu, druga wersja. Na świecie ADOS-2 uważany
                        jest za „złoty standard” diagnozy. Określenie „protokół obserwacji” oznacza, że
                        osoba prowadząca diagnozę korzysta podczas spotkań ze szczegółowej instrukcji
                        dotyczącej tego jak powinno przebiegać badanie – jakie zabawy, książki,
                        ilustracje wykorzystać w przypadku diagnozy dziecka oraz w jaki sposób
                        poprowadzić rozmowę z osobą dorosłą czy nastolatkiem. Następnie obserwacje
                        odnoszone są do precyzyjnie określonych kryteriów, by porównać obserwacje z
                        zachowaniami charakterystycznymi dla zaburzeń ze spektrum autyzmu.</p>
                    <p>ADOS -2 jest przeznaczony dla dzieci powyżej 12 miesiąca życia, młodzieży oraz
                        osób dorosłych. W przypadku dzieci kluczowe jest to, by potrafiły one chodzić i
                        samodzielnie przemieszczać się po pomieszczeniu. Osoba z niepełnosprawnością w
                        obrębie zmysłów wzroku i słuchu oraz motoryki nie może być diagnozowana z
                        wykorzystaniem ADOS-2. Narzędzie służy do obserwacji sfer takich jak: interakcje
                        i komunikacja społeczna oraz powtarzalne i ograniczone wzorce zachowań, czyli
                        obszary charakterystyczne dla zaburzeń ze spektrum autyzmu.</p>
                    <p>W procesie diagnostycznym obserwacja z wykorzystaniem ADOS-2 jest tylko jednym ze
                        sposobów zbierania informacji, równie ważnym jak pozostałe: wywiad, zapoznanie
                        się z dokumentacją, obserwacja w sytuacji nieustrukturyzowanej. Diagnoza jest
                        efektem podsumowania wszystkich dostępnym informacji oraz obserwacji dwóch
                        diagnostek biorących udział w procesie.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Who we are -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-inner">
                        <div class="section-sub-title">
                            <h3 class="under-line">Kim jesteśmy</h3>
                        </div>
                        <p class="text-justify">
                            Jesteśmy zespołem specjalistek zajmujących się diagnozą i terapią zaburzeń neurorozwojowych
                            u dzieci, młodzieży i dorosłych. Pracujemy w oparciu o metody potwierdzone naukowo. Diagnozę
                            trudności traktujemy jako początek drogi, etap który ma na celu lepsze zrozumienie drugiego
                            człowieka, jego potrzeb i mocnych stron. Wszystko po to, by pomóc w znalezieniu sposobu na
                            lepsze poznanie siebie i uzyskanie wsparcia, które może ułatwić codzienne funkcjonowanie.
                        </p>
                        <p class="text-justify">
                            Jesteśmy psycholożkami i psychoterapeutkami poznawczo-behawioralnymi w trakcie procesu
                            certyfikacji. W swojej pracy wykorzystujemy techniki terapii behawioralnej, poznawczej oraz
                            terapii schematów, z uwzględnieniem perspektywy rozwojowej. Bardzo ważnym jest dla nas
                            zbudowanie relacji, w której druga osoba czuje się bezpiecznie i swobodnie i w oparciu o nią
                            wspólnie odkrywać drogę prowadzącą do zmiany.
                        </p>
                        <p class="text-justify">
                            W pracy z dziećmi z zaburzeniami rozwojowymi dążymy do tego, by wspierać je w nabywaniu
                            umiejętności, z których mogą skorzystać od zaraz, zwłaszcza poza gabinetem. Istotne jest, by
                            terapia była dobrym, bezpiecznym i rozwijającym doświadczeniem dla dziecka i jego
                            najbliższych.
                        </p>
                    </div>
                    <div class="col-inner">
                        <div class="section-sub-title">
                            <h3 class="under-line">Zakres usług</h3>
                        </div>
                        <ul class="star-list">
                            <li>diagnoza różnicowa zaburzeń u dzieci, młodzieży i osób, dorosłych,</li>
                            <li>konsultacje psychologiczne,</li>
                            <li>wsparcie w zakresie planowania procesu terapeutycznego dzieci i młodzieży,</li>
                            <li>terapia dzieci, młodzieży i osób dorosłych.</li>
                        </ul>
                    </div>

                    <button type="button" class="btn btn-primary btn-default btn-xl btn-normal" data-toggle="modal"
                            data-target="#more">Przeczytaj więcej
                    </button>

                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                         aria-labelledby="myLargeModalLabel" aria-hidden="true" id="more">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Diagnoza różnicowa to złożony proces. Polega on na testowaniu różnych hipotez
                                        diagnostycznych, by znaleźć te, które w najlepszy sposób wyjaśniają przyczyny
                                        trudności.
                                        Bazujemy w nim na informacjach dostępnych z wywiadu, obserwacji, dokumentacji
                                        czy
                                        materiału filmowego.</p>
                                    <p>
                                        W praktyce oznacza to, że po zakończeniu diagnozy otrzymają
                                        Państwo
                                        nie tylko informację o tym, czy osoba diagnozowana spełnia kryteria
                                        diagnostyczne
                                        dla
                                        zaburzenia ze spektrum autyzmu czy nie, ale także zwrócimy uwagę na inne objawy,
                                        które
                                        wskazują na to, że bardziej trafne są inne hipotezy diagnostyczne lub
                                        wyjaśnienia
                                        mechanizmów pojawiania się
                                        i utrzymywania trudności. Może to w niektórych przypadkach oznaczać konieczność
                                        dalszego
                                        działania diagnostycznego. Staramy się wówczas przekazywać możliwie
                                        najdokładniejsze
                                        informacje, które mają pomóc.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- THEME DEFAULT BUTTON WITH NORMAL STYLE -->
                </div>
                {{--                <div class="col-md-6 hidden-sm hidden-xs media">--}}
                {{--                    <img alt="" src="images/kitku.webp" class="img-responsive"/>--}}
                {{--                </div>--}}
            </div>
        </div>
    </section>
    <!-- About Section End-->
    <!-- Support Section Start -->
    <section class="section-parallax" data-src="images/bg/mountains.webp" data-stellar-background-ratio="0.5">
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
    <section class="padding-bottom-50">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2 class="section-title-divider primary-divider">Zakres usług</h2>
                    </div>
                </div>
            </div>
            <div class="row service-box-wrap">
                <div class="col-md-3 col-sm-6 service-box-col">
                    <figure>
                        <div class="service-image">
                            <i class="flaticon-line-chart"></i>
                        </div>
                    </figure>
                    <h4 class="service-title title-bordered">Diagnoza ADOS</h4>
                    <p class="service-content">
                        Diagnoza psychologiczna pod kątem zaburzeń ze spektrum autyzmu z wykorzystaniem skali ADOS-2.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 service-box-col">
                    <figure>
                        <div class="service-image">
                            <i class="flaticon-speech-balloons"></i>
                        </div>
                    </figure>
                    <h4 class="service-title title-bordered">Konsultacje psychologiczne</h4>
                    <p class="service-content">
                        Spotkanie z osobą dorosłą mające na celu poszukiwanie rozwiązań dla aktualnych trudności lub
                        ustalenie najbardziej optymalnych form wsparcia.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 service-box-col">
                    <figure>
                        <div class="service-image">
                            <i class="flaticon-fast-forward-button"></i>
                        </div>
                    </figure>
                    <h4 class="service-title title-bordered">Wsparcie w zakresie planowania procesu terapeutycznego</h4>
                    <p class="service-content">
                        Wspólne ustalenie celów pracy w oparciu podejście rozwojowe, a także przygotowanie sposobów
                        realizacji celów w sposób możliwie najbardziej dostosowany do potrzeb i zasobów dziecka.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 service-box-col">
                    <figure>
                        <div class="service-image">
                            <i class="flaticon-compass"></i>
                        </div>
                    </figure>
                    <h4 class="service-title title-bordered">Terapia dzieci, młodzieży i osób dorosłych.</h4>
                    <p class="service-content">
                        Prowadzimy psychoterapię w nurcie poznawczo-behawioralnych oraz z wykorzystaniem technik
                        trzeciej fali CBT.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section End -->

    <!-- Counter Section Start -->
    <section class="section-parallax padding-bottom-50" data-src="images/bg/trees.webp"
             data-stellar-background-ratio="0.5">
        <span class="overlay-section-bg primary-section-bg"></span>
        <div class="container section-typo-white">
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="counter-wrap">
								<span class="counter-icon">
								<i class="flaticon-user"></i>
								</span>
                        <h3 class="counter" data-counter="791">
                            975
                        </h3>
                        <span class="counter-text">
								Wykonanych diagnoz
                        </span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-wrap">
								<span class="counter-icon">
								<i class="flaticon-clock"></i>
								</span>
                        <h3 class="counter" data-counter="211">
                            211
                        </h3>
                        <span class="counter-text">
                            Godzin przeprowadzonych szkoleń
						</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-wrap">
                        <span class="counter-icon">
								<i class="flaticon-home"></i>
						</span>
                        <h3 class="counter" data-counter="11">
                            11
                        </h3>
                        <span class="counter-text">
                            Współpracujących jednostek
                        </span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-wrap">
								<span class="counter-icon">
								<i class="flaticon-pencil"></i>
								</span>
                        <h3 class="counter" data-counter="48">
                            48
                        </h3>
                        <span class="counter-text">
                            Odbytych szkoleń specjalistycznych
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

@include('partials.team')

<!-- Support Section Start -->
    <section class="section-parallax" data-src="images/bg/mountains.webp" data-stellar-background-ratio="0.5">
        <span class="overlay-section-bg black-section-bg"></span>
        <div class="container section-typo-white">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">

                    <div class="text-center">
                        <a href="https://wzmocnienie.pl" title="Gabinet Psychoterapii Wzmocnienie">
                            <img src="{{ asset('/images/logo_biale_bez_tla.svg') }}" height="350"/>
                        </a>
                    </div>

                    {{--                    <h2 class="inline-content"><span>Gabinet psychoterapii "Wzmocnienie"</span></h2>--}}
                    {{--                    <!-- SECTION TITLE -->--}}
                    {{--                    <a class="btn btn-default btn-xl btn-bg-white btn-inline" href="https://wzmocnienie.pl"--}}
                    {{--                       target="_blank">wzmocnienie.pl</a>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- Support Section End -->

@include('partials.pricing')

@include('partials.proces')

{{--@include('partials.testimonials')--}}

@include('partials.contact')

    <!-- Map Section Start -->
    <section class="padding-none">
        <!-- Map Styles -> Standard, Aubergine, Silver, Retro, Dark, Aubergine -->
        {{--        <div id="starkGoogleMap" style="width:100%;height:400px;" data-map-style="Silver"></div>--}}
    </section>
    <!-- Map Section End -->

    <!-- Footer Start -->
    <footer class="footer padding-tb-30 primary-section-bg section-typo-white">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <p class="copyright-text">Copyright &copy; 2021
                        <a href="https://wzmocnienie.pl">Wzmocnienie Aleksandra Magda</a>.
                        Designed by <a href="https://gackowski.edu.pl/">Szymon Gackowski</a>
                    </p>
                </div>
            </div>
        </div>
        <a href="#" class="back-to-top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
    </footer>
    <!-- Footer End -->
</div><!-- .main-wrap -->

<script src="{{ asset('js/theme.js') }}"></script>
<script src="{{ asset('/js/app.js') }}"></script>
@include('cookie-consent::index')

</body>
</html>
