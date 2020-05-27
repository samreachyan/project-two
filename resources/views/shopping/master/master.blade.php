<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Samreach Demo Website For Online Clothes Project on Google Platform">

    @include('shopping.master.og')
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ asset('shopping') }}/" >
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="css/fontawesome-stars.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="css/meanmenu.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="css/venobox.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="css/helper.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5d7a3944c22bdd393bb580f8/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</head>
    <body>
        <div class="body-wrapper">
            @include('shopping.master.header')
            
            {{-- @include('shopping.master.slider') --}}

            @yield('content')

            @include('shopping.master.footer')
            
        </div>

        @section('script')
            <script src="js/vendor/jquery-1.12.4.min.js"></script>
            <!-- Popper js -->
            <script src="js/vendor/popper.min.js"></script>
            <!-- Bootstrap V4.1.3 Fremwork js -->
            <script src="js/bootstrap.min.js"></script>
            <!-- Ajax Mail js -->
            <script src="js/ajax-mail.js"></script>
            <!-- Meanmenu js -->
            <script src="js/jquery.meanmenu.min.js"></script>
            <!-- Wow.min js -->
            <script src="js/wow.min.js"></script>
            <!-- Slick Carousel js -->
            <script src="js/slick.min.js"></script>
            <!-- Owl Carousel-2 js -->
            <script src="js/owl.carousel.min.js"></script>
            <!-- Magnific popup js -->
            <script src="js/jquery.magnific-popup.min.js"></script>
            <!-- Isotope js -->
            <script src="js/isotope.pkgd.min.js"></script>
            <!-- Imagesloaded js -->
            <script src="js/imagesloaded.pkgd.min.js"></script>
            <!-- Mixitup js -->
            <script src="js/jquery.mixitup.min.js"></script>
            <!-- Countdown -->
            <script src="js/jquery.countdown.min.js"></script>
            <!-- Counterup -->
            <script src="js/jquery.counterup.min.js"></script>
            <!-- Waypoints -->
            <script src="js/waypoints.min.js"></script>
            <!-- Barrating -->
            <script src="js/jquery.barrating.min.js"></script>
            <!-- Jquery-ui -->
            <script src="js/jquery-ui.min.js"></script>
            <!-- Venobox -->
            <script src="js/venobox.min.js"></script>
            <!-- Nice Select js -->
            <script src="js/jquery.nice-select.min.js"></script>
            <!-- ScrollUp js -->
            <script src="js/scrollUp.min.js"></script>
            <!-- Main/Activator js -->
            <script src="js/main.js"></script>
        @show
    </body>

<!-- index30:23-->
</html>