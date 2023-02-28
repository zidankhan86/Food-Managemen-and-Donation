<!DOCTYPE html>
<html lang="en">
<head>

     <title>Food Donation System</title>
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






     @include('frontend.fixed.header')


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
        @include('sweetalert::alert')


          @yield('content')

     </section>





     @include('frontend.fixed.footer')









<!--Login Modal Start-->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
         <div class="modal-content">
              <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                   </button>
              </div>
              <div class="modal-body">
                   <form action="{{route('login')}}" method="post">
                       @csrf



                        <div class="form-group">
                             <label>Email address</label>
                             <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                             <label>Password</label>
                             <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>

                        <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                   </form>
              </div>
         </div>
    </div>
</div>
<!--Login Modal end-->


<!--Sign up Strarted Modal -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
         <div class="modal-content">
              <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">SignUp please</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                   </button>
              </div>
              <div class="modal-body">
                   <form action="{{route('signin')}}" method="post">
                       @csrf

                       @if($errors->any())
                          @foreach($errors->all() as $message)
                          <p class="alert alert-danger">{{$message}}</p>
                          @endforeach
                          @endif

                        <div class="form-group">
                             <label>User Name</label>
                             <input type="text" class="form-control" name="name" placeholder="User Name">
                        </div>
                        <div class="form-group">
                             <label>Email address</label>
                             <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                             <label>Address</label>
                             <input type="text" class="form-control" name="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                             <label>Phone</label>
                             <input type="tel" class="form-control" name="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                             <label>Password</label>
                             <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div>
                          <label for="">Sign up as</label>
                          <select name="role">
                              <option value="restaurant">Restaurant</option>
                              <option value="organization">Organization</option>
                          </select>
                        </div>

                        <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                   </form>
              </div>
         </div>
    </div>
</div>

<!--Sign up End Modal -->


     <!-- SCRIPTS -->
     <script src="{{url('/frontend/js/jquery.js')}}"></script>
      <script src="{{url('/frontend/js/bootstrap.min.js')}}"></script>

     <script src="{{url('/frontend/js/jquery.stellar.min.js')}}"></script>
     <script src="{{url('/frontend/js/wow.min.js')}}"></script>
     <script src="{{url('/frontend/js/owl.carousel.min.js')}}"></script>
     <script src="{{url('/frontend/js/jquery.magnific-popup.min.js')}}"></script>
     <script src="{{url('/frontend/js/smoothscroll.js')}}"></script>
     <script src="{{url('/frontend/js/custom.js')}}"></script>

     @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

</body>
</html>
