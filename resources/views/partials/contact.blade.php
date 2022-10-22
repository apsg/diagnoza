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
                <form id="contact-form" class="contact-form" action="{{ url('/contact') }}" method="POST">
                    @csrf
                    <div class="col-md-4 padding-bottom-20">
                        <div class="form-group">
                            <input id="name" class="form-control" name="name" autocomplete="off" placeholder="Imię"
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kogo dotyczy diagnoza?</label>
                            <select name="age" class="form-control" required>
                                <option>... wybierz</option>
                                <option value="dorosly">Diagnoza osoby dorosłej</option>
                                <option value="dziecko">Diagnoza dziecka</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Czy wywiad wstępny oraz podsumowanie mogą odbywać się w formie zdalnej
                                (on-line)?</label>
                            <select name="wywiad" class="form-control" required>
                                <option>... wybierz</option>
                                <option value="tak">Tak</option>
                                <option value="nie">Nie</option>
                            </select>
                        </div>
                    </div>
                    <span class="clearfix"></span>
                    <div class="contact-message col-md-12">
                        <div class="form-group margin-bottom-0">
                            <textarea id="message" class="form-control textarea" rows="3" name="message"
                                      placeholder="Wiadomość" data-bv-field="message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 padding-30">
                        <p>Przesyłając wiadomość przez formularz kontaktowy wyrażasz zgodę na przetwarzanie
                            wskazanych danych osobowych przez Aleksandrę Magda prowadzącą działalność gospodarczą
                            pod firmą Wzmocnienie Aleksandra Magda. Więcej na temat przetwarzania danych osobowych
                            przeczytasz w <a target="_blank" href="https://wzmocnienie.pl/files/polityka.pdf">Polityce prywatności</a>.
                        </p>
                        <label>
                            <input type="checkbox" class="" required name="accept"> Akceptuję
                            <a href="https://wzmocnienie.pl/files/regulamin.pdf" target="_blank">Regulamin</a> oraz
                            <a target="_blank" href="https://wzmocnienie.pl/files/polityka.pdf">Politykę prywatności</a>
                        </label>
                    </div>
                    <div class="col-md-12 padding-top-30">
                        <button type="submit" class="btn btn-default btn-xl btn-normal margin-top-20 contact-btn">
                            Wyślij
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
