<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="canonical" href="http://rapfront.test/amp/news/this-is-a-new-article-from-editor/">


        @yield('meta-section')
        <meta name="description" content="Rap2France est le site le plus complet sur le Rap Français. On y retrouve toute l'actualité du rap français, des paroles rap, écoutez des clips rap français, des biographies, des photos des rappeurs, des interviews rap.">
        
        <meta name="keywords" content="paroles clips rap français mp3 son biographies rappeur vidéos album tracklist pochette photos booba rohff medine sinik diam's 113 kery james mafia K1 fry ntm assassin la rumeur mc solaar lacrim booba rohff gradur maitre gims black m">
        <!-- Include All CSS -->
        <link rel="stylesheet" type="text/css" href="{{@asset('assets/template/css/bootstrap.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{@asset('assets/template/css/themewar-icons.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{@asset('assets/template/css/linea-weather-icons.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{@asset('assets/template/css/magro-icons.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{@asset('assets/template/css/lightcase.css')}}">
        <link rel="stylesheet" type="text/css" href="{{@asset('assets/template/css/slick.css')}}">
        <link rel="stylesheet" type="text/css" href="{{@asset('assets/template/css/owl.carousel.min.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{@asset('assets/template/css/owl.theme.default.min.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{@asset('assets/template/css/animate.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{@asset('assets/template/css/preset.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{@asset('assets/template/css/ignore_for_wp.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{@asset('assets/template/css/theme.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{@asset('assets/template/css/responsive.css')}}"/>
        <meta property="fb:pages" content="42863617656" />
        


        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="https://cd1.rap2france.com/public/templates/default/assets/images/icone/57.jpg">
        <!-- Favicon Icon -->
    </head>
    <body style="background:black" >
        <!-- Preloading -->
        <div class="preloader text-center">
            <div class="la-ball-scale-multiple la-2x">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- Preloading -->
        @include('components.header')
        @yield('main-section')
        @include('components.footer')

        <!-- Bact To Top -->
        <a href="#" id="backtotop"><i class="twi-angle-double-up2"></i></a>
        <!-- Bact To Top -->

        <!-- Include All JS -->
        <script src="{{@asset('assets/template/js/jquery.js')}}"></script>
        <script src="{{@asset('assets/template/js/jquery-ui.js')}}"></script>
        <script src="{{@asset('assets/template/js/bootstrap.js')}}"></script>
        <script src="{{@asset('assets/template/js/lightcase.js')}}"></script>
        <script src="{{@asset('assets/template/js/jquery.plugin.min.js')}}"></script>
        <script src="{{@asset('assets/template/js/jquery.countdown.min.js')}}"></script>
        <script src="{{@asset('assets/template/js/jquery.appear.js')}}"></script>
        <script src="{{@asset('assets/template/js/slick.js')}}"></script>
        <script src="{{@asset('assets/template/js/jquery.shuffle.min.js')}}"></script>
        <script src="{{@asset('assets/template/js/stickyfill.min.js')}}"></script>
        <script src="{{@asset('assets/template/js/owl.carousel.min.js')}}"></script>
        <script src="{{@asset('assets/template/js/theme.js')}}"></script>
        <script src="{{@asset('js/app.js')}}"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-8897495-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-8897495-1');
        </script>

         @yield('page-script')
         <noscript>Votre navigateur ne supporte pas Javascript</noscript>

    </body>
</html>
