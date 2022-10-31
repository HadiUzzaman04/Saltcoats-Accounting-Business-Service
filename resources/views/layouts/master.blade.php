<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>saltcoatsaccounting&businessservice.com</title>

    <link rel="stylesheet" type="text/css" href="{{asset('website/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('website/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('website/css/style.css')}}">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    @include('layouts.header')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    @yield('content')
    <!-- ***** Testimonials Item End ***** -->
    
    <!-- ***** Footer Start ***** -->
   @include('layouts.footer')

    <!-- jQuery -->
    <script src="{{asset('website/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('website/js/popper.js')}}"></script>
    <script src="{{asset('website/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('website/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('website/js/waypoints.min.js')}}"></script>
    <script src="{{asset('website/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('website/js/imgfix.min.js')}}"></script> 
    <script src="{{asset('website/js/mixitup.js')}}"></script> 
    <script src="{{asset('website/js/accordions.js')}}"></script>
    
    <!-- Global Init -->
    <script src="{{asset('website/js/custom.js')}}"></script>

  </body>
</html>