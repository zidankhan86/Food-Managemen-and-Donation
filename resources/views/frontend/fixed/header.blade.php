<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation" style="">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

               </button>

               <!-- lOGO TEXT HERE -->
               <a href="" class="navbar-brand" style="color: black;">HumanCare<span></span><br>Restaurant<i style="color: rgb(248, 11, 11)" class='fas fa-hand-holding-heart'></i></a>
          </div>

          <!-- MENU LINKS -->
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="{{route('home')}}" class="smoothScroll" style="color:rgb(78, 5, 5) ;">Home</a></li>
                    <li><a href="{{route('about')}}" class="smoothScroll" style="color: rgb(56, 8, 8);">About</a></li>
                    <li><a href="{{route('gallery')}}" class="smoothScroll" style="color: rgb(59, 8, 8);">Gallery</a></li>
                    <li><a href="{{route('contract')}}" class="smoothScroll" style="color:rgb(61, 6, 6) ;">Contact</a></li>

                    <li><a href="{{route('menu.dishes')}}" class="smoothScroll" style="color:rgb(97, 2, 2) ;">Food</a></li>
               </ul>

               <ul class="nav navbar-nav navbar-right">
                    @auth



                    @if (auth()->user()->role=='organization')
                    <div class="dropdown">

                         <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                         {{auth()->user()->name}}
                         </button>
                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                              <li><a href="{{route('org.profile')}}"  class="text-primary" style="color:rgb(37, 3, 3) ;">Profile</a></li>
                              <li><a href="{{route('Logout_frontend')}}" class="text-primary" style="color: rgb(114, 7, 7);">Logout</a></li>
                         </ul>


                    </div>
                    @else

                    <!--For restaurant -->

                    <div class="dropdown">

                         <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                         {{auth()->user()->name}}
                         </button>
                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                              <li><a href="{{route('org.profile')}}"  class="text-primary" style="color:black ;">Profile</a></li>
                              <li><a href="{{route('food.frontend')}}"  class="text-primary" style="color:black ;">Add food</a></li>
                              <li><a href="{{route('Logout_frontend')}}" class="text-primary" style="color: black;">Logout</a></li>
                         </ul>


                    </div>

                    @endif

                    @else
                    <li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#signup">Sign Up</a></li>
                    <li><a href="{{route('visitor.donate')}}" class="btn btn-danger"><b>Donate Now</a></li>
                    @endauth



               </ul>

          </div>

     </div>

</section>
