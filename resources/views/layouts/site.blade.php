<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Toute l'actualité du Rap Français - Rap2France</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


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
        <link rel="stylesheet" type="text/css" href="{{@asset('css/app.css')}}" />
        


        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="https://cd1.rap2france.com/public/templates/default/assets/images/icone/57.jpg">
        <!-- Favicon Icon -->
    </head>
    <body class="bg-black" >
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
        <script src="{{@asset('assets/template/js/gmaps.js')}}"></script>
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyBJtPMZ_LWZKuHTLq5o08KSncQufIhPU3o"></script>
        <script src="{{@asset('assets/template/js/jquery.shuffle.min.js')}}"></script>
        <script src="{{@asset('assets/template/js/stickyfill.min.js')}}"></script>
        <script src="{{@asset('assets/template/js/owl.carousel.min.js')}}"></script>
        <script src="{{@asset('assets/template/js/theme.js')}}"></script>
        <script src="{{@asset('js/app.js')}}"></script>
         <script>(function(){var r,d=document,gt=d.getElementById,cr=d.createElement,tg=d.getElementsByTagName,id="aidaform-embed";if(!gt.call(d,id)){r=cr.call(d,"script");r.id=id;r.src="https://embed.aidaform.com/embed.js";(d.head || tg.call(d,"head")[0]).appendChild(r);}})()</script>


    </body>
</html>
