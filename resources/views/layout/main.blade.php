<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>{{page_title($title) ?? ''}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Facility Management & Multiservices" />
    <meta name="keywords" content="Conception de solutions web & mobile, infographie, communication digitale, herbergement de site web"/>
    <meta name="author" content="MANEL GROUP" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/jquery.countdown.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/bg.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/colors/orange.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/responsive-mobile.css')}}" type="text/css" />
  </head>

  <body id="homepage">
    <div id="wrapper">

        @include('layout.header')
        @yield('content')
        @include('layout.footer')

    </div>

    <!-- Javascript Files -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('js/easing.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/jquery.countTo.js')}}"></script>
    <script src="{{asset('js/validation-rsvp.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/enquire.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/jquery.plugin.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.js')}}"></script>
    <script src="{{asset('js/countdown-custom.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAc5d1RS_0yWJ1Hyw2hGWfbRZ9KKaxFAZo"></script>
    <script src="{{asset('js/map.js')}}"></script>
    <script src="{{asset('js/subscribe.js')}}"></script>
    <script src="{{asset('js/designesia.js')}}"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/63c837b5c2f1ac1e202e63a8/1gn31j7gn';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
  </body>
</html>
