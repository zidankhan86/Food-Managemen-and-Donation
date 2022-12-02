<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation" style="background-color:brown; ">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

               </button>

               <!-- lOGO TEXT HERE -->
               <a href="index.html" class="navbar-brand" style="color: black;">HumanCare<span></span><br>Restaurant<i style="color: rgb(248, 11, 11)" class='fas fa-hand-holding-heart'></i></a>
          </div>

          <!-- MENU LINKS -->
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="{{route('home')}}" class="smoothScroll" style="color:white ;">Home</a></li>
                    <li><a href="{{route('about')}}" class="smoothScroll" style="color: white;">About</a></li>
                    <li><a href="#menu" class="smoothScroll" style="color: white;">Category</a></li>
                    <li><a href="#team" class="smoothScroll" style="color: white;">Restaurant</a></li>
                    <li><a href="{{route('contract')}}" class="smoothScroll" style="color:white ;">Contact</a></li>
                    <li><a href="#contact" class="smoothScroll" style="color:white ;">Dishes</a></li>
               </ul>

               <ul class="nav navbar-nav navbar-right">
                    @auth

                    <div class="dropdown">
                         <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                         {{auth()->user()->name}}
                         </button>
                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                              <li><a href="#"  class="text-primary" style="color:black ;">Profile</a></li>
                              <li><a href="#"  class="text-primary" style="color:black ;">Another action</a></li>
                              <li><a href="#"  class="text-primary" style="color: black;">Something else here</a></li>
                              <li><a href="{{route('Logout_frontend')}}" class="text-primary" style="color: black;">Logout</a></li>
                         </ul>
                         <a href="" class="btn btn-success"><b>Donate <br>Now</a>
                    </div>
                    @else
                    <li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#signup">Sign Up</a></li>
                    <li><a href="{{route('doante.about')}}" class="btn btn-danger"><b>Donate Now</a></li>
                    @endauth



               </ul>

          </div>

     </div>

</section>
