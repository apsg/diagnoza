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

<div class="main-wrap">

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
                                    Dowiedz si?? wi??cej
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
                                            class="primary-color">doros??ych</span>
                                        w kierunku autyzmu</h1>
                                </div>
                                <a class="btn btn-default btn-xl stark-animated animated" href="#ados"
                                   data-animation="bounceInDown" data-animation-duration="1.5s"
                                   data-animation-delay="1000">
                                    Dowiedz si?? wi??cej
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
                    <p><strong>ADOS 2</strong> - (Autism Diagnosis Observation Schedule), czyli protok???? obserwacji do
                        diagnozy zaburze?? ze spektrum autyzmu, druga wersja. Na ??wiecie ADOS-2 uwa??any
                        jest za ???z??oty standard??? diagnozy. Okre??lenie ???protok???? obserwacji??? oznacza, ??e
                        osoba prowadz??ca diagnoz?? korzysta podczas spotka?? ze szczeg????owej instrukcji
                        dotycz??cej tego jak powinno przebiega?? badanie ??? jakie zabawy, ksi????ki,
                        ilustracje wykorzysta?? w przypadku diagnozy dziecka oraz w jaki spos??b
                        poprowadzi?? rozmow?? z osob?? doros???? czy nastolatkiem. Nast??pnie obserwacje
                        odnoszone s?? do precyzyjnie okre??lonych kryteri??w, by por??wna?? obserwacje z
                        zachowaniami charakterystycznymi dla zaburze?? ze spektrum autyzmu.</p>
                    <p>ADOS -2 jest przeznaczony dla dzieci powy??ej 12 miesi??ca ??ycia, m??odzie??y oraz
                        os??b doros??ych. W przypadku dzieci kluczowe jest to, by potrafi??y one chodzi?? i
                        samodzielnie przemieszcza?? si?? po pomieszczeniu. Osoba z niepe??nosprawno??ci?? w
                        obr??bie zmys????w wzroku i s??uchu oraz motoryki nie mo??e by?? diagnozowana z
                        wykorzystaniem ADOS-2. Narz??dzie s??u??y do obserwacji sfer takich jak: interakcje
                        i komunikacja spo??eczna oraz powtarzalne i ograniczone wzorce zachowa??, czyli
                        obszary charakterystyczne dla zaburze?? ze spektrum autyzmu.</p>
                    <p>W procesie diagnostycznym obserwacja z wykorzystaniem ADOS-2 jest tylko jednym ze
                        sposob??w zbierania informacji, r??wnie wa??nym jak pozosta??e: wywiad, zapoznanie
                        si?? z dokumentacj??, obserwacja w sytuacji nieustrukturyzowanej. Diagnoza jest
                        efektem podsumowania wszystkich dost??pnym informacji oraz obserwacji dw??ch
                        diagnostek bior??cych udzia?? w procesie.</p>
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
                            <h3 class="under-line">Kim jeste??my</h3>
                        </div>
                        <p class="text-justify">
                            Jeste??my zespo??em specjalistek zajmuj??cych si?? diagnoz?? i terapi?? zaburze?? neurorozwojowych
                            u dzieci, m??odzie??y i doros??ych. Pracujemy w??oparciu o metody potwierdzone naukowo. Diagnoz??
                            trudno??ci traktujemy jako pocz??tek drogi, etap kt??ry ma na celu lepsze zrozumienie drugiego
                            cz??owieka, jego potrzeb i mocnych stron. Wszystko po to, by pom??c w??znalezieniu sposobu na
                            lepsze poznanie siebie i uzyskanie wsparcia, kt??re mo??e u??atwi?? codzienne funkcjonowanie.
                        </p>
                        <p class="text-justify">
                            Jeste??my psycholo??kami i psychoterapeutkami poznawczo-behawioralnymi w??trakcie procesu
                            certyfikacji. W swojej pracy wykorzystujemy techniki terapii behawioralnej, poznawczej oraz
                            terapii schemat??w, z uwzgl??dnieniem perspektywy rozwojowej. Bardzo wa??nym jest dla nas
                            zbudowanie relacji, w??kt??rej druga osoba czuje si?? bezpiecznie i swobodnie i w oparciu o ni??
                            wsp??lnie odkrywa?? drog?? prowadz??c?? do zmiany.
                        </p>
                        <p class="text-justify">
                            W pracy z dzie??mi z zaburzeniami rozwojowymi d????ymy do tego, by wspiera?? je w nabywaniu
                            umiej??tno??ci, z kt??rych mog?? skorzysta?? od zaraz, zw??aszcza poza gabinetem. Istotne jest, by
                            terapia by??a dobrym, bezpiecznym i rozwijaj??cym do??wiadczeniem dla dziecka i jego
                            najbli??szych.
                        </p>
                    </div>
                    <div class="col-inner">
                        <div class="section-sub-title">
                            <h3 class="under-line">Zakres us??ug</h3>
                        </div>
                        <ul class="star-list">
                            <li>diagnoza r????nicowa zaburze?? u dzieci, m??odzie??y i os??b, doros??ych,</li>
                            <li>konsultacje psychologiczne,</li>
                            <li>wsparcie w zakresie planowania procesu terapeutycznego dzieci i m??odzie??y,</li>
                            <li>terapia dzieci, m??odzie??y i os??b doros??ych.</li>
                        </ul>
                    </div>

                    <button type="button" class="btn btn-primary btn-default btn-xl btn-normal" data-toggle="modal"
                            data-target="#more">Przeczytaj wi??cej
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
                                    <p>Diagnoza r????nicowa to z??o??ony proces. Polega on na testowaniu r????nych hipotez
                                        diagnostycznych, by znale???? te, kt??re w najlepszy spos??b wyja??niaj?? przyczyny
                                        trudno??ci.
                                        Bazujemy w nim na informacjach dost??pnych z wywiadu, obserwacji, dokumentacji
                                        czy
                                        materia??u filmowego.</p>
                                    <p>
                                        W praktyce oznacza to, ??e po zako??czeniu diagnozy otrzymaj??
                                        Pa??stwo
                                        nie tylko informacj?? o tym, czy osoba diagnozowana spe??nia kryteria
                                        diagnostyczne
                                        dla
                                        zaburzenia ze spektrum autyzmu czy nie, ale tak??e zwr??cimy uwag?? na inne objawy,
                                        kt??re
                                        wskazuj?? na to, ??e bardziej trafne s?? inne hipotezy diagnostyczne lub
                                        wyja??nienia
                                        mechanizm??w pojawiania si??
                                        i utrzymywania trudno??ci. Mo??e to w niekt??rych przypadkach oznacza?? konieczno????
                                        dalszego
                                        dzia??ania diagnostycznego. Staramy si?? w??wczas przekazywa?? mo??liwie
                                        najdok??adniejsze
                                        informacje, kt??re maj?? pom??c.</p>
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
                    <h2 class="inline-content"><span>Skontaktuj si?? z nami!</span></h2>
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
                        <h2 class="section-title-divider primary-divider">Zakres us??ug</h2>
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
                        Diagnoza psychologiczna pod k??tem zaburze?? ze spektrum autyzmu z wykorzystaniem skali ADOS-2.
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
                        Spotkanie z osob?? doros???? maj??ce na celu poszukiwanie rozwi??za?? dla aktualnych trudno??ci lub
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
                        Wsp??lne ustalenie cel??w pracy w oparciu podej??cie rozwojowe, a tak??e przygotowanie sposob??w
                        realizacji cel??w w spos??b mo??liwie najbardziej dostosowany do potrzeb i zasob??w dziecka.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 service-box-col">
                    <figure>
                        <div class="service-image">
                            <i class="flaticon-compass"></i>
                        </div>
                    </figure>
                    <h4 class="service-title title-bordered">Terapia dzieci, m??odzie??y i os??b doros??ych.</h4>
                    <p class="service-content">
                        Prowadzimy psychoterapi?? w nurcie poznawczo-behawioralnych oraz z wykorzystaniem technik
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
                            791
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
                            Godzin przeprowadzonych szkole??
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
                            Wsp????pracuj??cych jednostek
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
                            Odbytych szkole?? specjalistycznych
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

@include('partials.testimonials')

<!-- Contact Section Start -->
    <section class="contact-section" id="kontakt">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="section-title">
                        <h2 class="section-title-divider primary-divider">Kontakt</h2>
                        <!-- SECTION TITLE -->
                        <p>
                            Zostaw swoje dane kontaktowe oraz cel kontaktu (np. diagnoza ADOS, konsultacja itp.) -
                            odpiszemy lub oddzwonimy do Ciebie!
                            Prosimy <strong>nie opisywa?? problem??w ani nie zostawia?? danych osobowych dziecka</strong> w
                            formularzu - te
                            dane zbierzemy w bezpieczniejszy spos??b.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="contact-adress">
                        <p class="contact-icons">
                            <i class="fa fa-map-marker primary-color"></i>
                        </p>
                        <div class="padding-tb-20">
                            <p>
                                @foreach(\App\CitiesHelper::get('address') as $address)
                                    <x-maps-link :address="$address"/>
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="contact-mail">
                        <p class="contact-icons"><i class="fa fa-envelope-o primary-color"></i></p>
                        <div class="padding-tb-20">
                            <a href="mailto:ados@wzmocnienie.pl">ados@wzmocnienie.pl</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="contact-form">
                    <p id="contact-status-msg" class="hide"></p>
                    <form id="contact-form" class="contact-form" action="{{ url('/contact') }}" method="POST">
                        @csrf
                        <div class="col-md-4 padding-bottom-20">
                            <div class="form-group">
                                <input id="name" class="form-control" name="name" autocomplete="off" placeholder="Imi??"
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
                        <div class="col-md-4 padding-bottom-20">
                            <div class="form-group">
                                <input id="phone" class="form-control" name="phone" autocomplete="off"
                                       placeholder="Telefon"
                                       data-bv-field="phone" type="phone">
                            </div>
                        </div>
                        <span class="clearfix"></span>
                        <div class="contact-message col-md-12">
                            <div class="form-group margin-bottom-0">
                            <textarea id="message" class="form-control textarea" rows="3" name="message"
                                      placeholder="Wiadomo????" data-bv-field="message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 padding-top-30">
                            <button type="submit" class="btn btn-default btn-xl btn-normal margin-top-20 contact-btn">
                                Wy??lij
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
{{--<script src="{{ asset('/js/app.js') }}"></script>--}}

</body>
</html>
