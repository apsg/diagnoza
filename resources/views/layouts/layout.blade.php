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
    <title>@yield('title') | {{ config('app.name') }}</title>

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

    @yield('content')

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
