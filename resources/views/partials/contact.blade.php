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
                        Prosimy <strong>nie opisywać problemów ani nie zostawiać danych osobowych dziecka</strong> w
                        formularzu - te
                        dane zbierzemy w bezpieczniejszy sposób.
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
                <div id="contact"></div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
