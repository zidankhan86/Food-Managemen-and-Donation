<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation" style="background-color:brown; ">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand" style="color: black;">BeingHuman<span></span><br>Restaurant<i class='fas fa-hand-holding-heart'></i></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About</a></li>
                         <li><a href="#team" class="smoothScroll">Restaurant</a></li>
                         <li><a href="#menu" class="smoothScroll">Category</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         @auth
                         <li><a href="#" data-toggle="modal" data-target="">Profile</a></li>
                         <li><a href="#" data-toggle="modal" data-target="">Logout</a></li>
                         <a href="#footer" class="section-btn"><b>Donate <br>Now</a>
                         @else
                         <li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
                         <li><a href="#" data-toggle="modal" data-target="#signup">Sign Up</a></li>
                         @endauth
                    </ul>
               </div>

          </div>
     </section>