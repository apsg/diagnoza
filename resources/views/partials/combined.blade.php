
@include('partials.about')

<!-- Support Section Start -->
<section class="section-parallax" data-src="images/bg/mountains.webp" data-stellar-background-ratio="0.5">
    <span class="overlay-section-bg black-section-bg"></span>
    <div class="container section-typo-white">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 text-center">
                <h2 class="inline-content"><span>Skontaktuj się z nami!</span></h2>
                <!-- SECTION TITLE -->
                <a class="btn btn-default btn-xl btn-inline" href="/kontakt">Kontakt</a>
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
                    <h3 class="counter" data-counter="972">
                        972
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
                    <h3 class="counter" data-counter="315">
                        315
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
                    <h3 class="counter" data-counter="68">
                        68
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
            </div>
        </div>
    </div>
</section>

@include('partials.pricing')
