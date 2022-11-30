<!DOCTYPE html>
<html lang="en">
<head>

     <title>Eatery Cafe and Restaurant Template</title>
<!-- 

Eatery Cafe Template 

http://www.templatemo.com/tm-515-eatery

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

      <link rel="stylesheet" href="{{url('/frontend/css/bootstrap.min.css')}}">

     <!-- <link rel="stylesheet" href="{{url('/frontend/css/font-awesome.min.css')}}"> -->
     <link rel="stylesheet" href="{{url('/frontend/css/animate.css')}}">
     <link rel="stylesheet" href="{{url('/frontend/css/owl.carousel.css')}}">
     <link rel="stylesheet" href="{{url('/frontend/css/owl.theme.default.min.css')}}">
     <link rel="stylesheet" href="{{url('/frontend/css/magnific-popup.css')}}">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{url('/frontend/css/templatemo-style.css')}}">

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     

     @include('frontend.fixed.header')


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          @yield('content')
     </section>


             


     @include('frontend.fixed.footer')


     <!-- SCRIPTS -->
     <script src="{{url('/frontend/js/jquery.js')}}"></script>
      <script src="{{url('/frontend/js/bootstrap.min.js')}}"></script> 

     <script src="{{url('/frontend/js/jquery.stellar.min.js')}}"></script>
     <script src="{{url('/frontend/js/wow.min.js')}}"></script>
     <script src="{{url('/frontend/js/owl.carousel.min.js')}}"></script>
     <script src="{{url('/frontend/js/jquery.magnific-popup.min.js')}}"></script>
     <script src="{{url('/frontend/js/smoothscroll.js')}}"></script>
     <script src="{{url('/frontend/js/custom.js')}}"></script>

</body>
</html>