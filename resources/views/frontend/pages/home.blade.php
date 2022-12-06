 @extends('frontend.master')
 @section('content')
 <!-- HOME -->
 <div class="row">

      <div class="owl-carousel owl-theme">
           <div class="item item-first">
                <div class="caption">
                     <div class="container">
                          <div class="col-md-8 col-sm-12">
                               <h3>Donate  &amp; Enjoy </h3>
                               <h1>Our mission is to provide free food for all </h1>
                               <a href="{{route('doante.about')}}" class="section-btn btn btn-default smoothScroll">Donate </a>
                          </div>
                     </div>
                </div>
           </div>

           <div class="item item-second">
                <div class="caption">
                     <div class="container">
                          <div class="col-md-8 col-sm-12">
                               <h3>This is Your Own Restaurant</h3>
                               <h1>Donate Your Unsold Food .A New Day Start With A New Hope . </h1>
                               <a href="{{route('doante.about')}}" class="section-btn btn btn-default smoothScroll">Donate Now</a>
                          </div>
                     </div>
                </div>
           </div>

           <div class="item item-third">
                <div class="caption">
                     <div class="container">
                          <div class="col-md-8 col-sm-12">
                               <h3>We will make your day better</h3>
                               <h1>Enjoy Your Meal with us</h1>

                          </div>
                     </div>
                </div>
           </div>
      </div>

 </div>
 <!-- ABOUT -->
 <section id="about" data-stellar-background-ratio="0.5">
      <div class="container">
           <div class="row">

                <div class="col-md-6 col-sm-12">
                     <div class="about-info">
                          <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                               <h4>Read our story</h4>
                               <h2>We've been Making people happy since 2022.</h2>
                          </div>

  <div class="wow fadeInUp" data-wow-delay="0.4s">
     <p>We have started our journey in 2022 .We were think about Unsold food in restaurant. We can make people happy every momont by reaching this unsold food . Please tell your friends about us and Donte your unsold and unused foood for others. Show your Humanity .Be Happy . Thank you.</p>
       </div>
         </div>
              </div>

                <div class="col-md-6 col-sm-12">
                     <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                          <img src="{{url('/frontend/images/about-image.jpg')}}" class="img-responsive" alt="">
                     </div>
                </div>

           </div>
      </div>
 </section>





 <!-- MENU-->
 <section id="menu" data-stellar-background-ratio="0.5">
      <div class="container">
           <div class="row">

                <div class="col-md-12 col-sm-12">
                     <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                          <h2>Our Menus</h2>
                          <h4>Tea Time &amp; Dining</h4>
                     </div>
                </div>

                <div class="col-md-4 col-sm-6">
                     <!-- MENU THUMB -->
                     <div class="menu-thumb">
                          <a href="{{url('/frontend/images/menu-image1.jpg')}}" class="image-popup" title="American Breakfast">
                               <img src="{{url('/frontend/images/menu-image1.jpg')}}" class="img-responsive" alt="">

                               <div class="menu-info">
                                    <div class="menu-item">
                                         <h3>American Breakfast</h3>
                                         <p>Tomato / Eggs / Sausage</p>
                                    </div>
                                    <div class="menu-price">
                                         <span>$25</span>
                                    </div>
                               </div>
                          </a>
                     </div>
                </div>

                <div class="col-md-4 col-sm-6">
                     <!-- MENU THUMB -->
                     <div class="menu-thumb">
                          <a href="{{url('/frontend/images/menu-image2.jpg')}}" class="image-popup" title="Self-made Salad">
                               <img src="{{url('/frontend/images/menu-image2.jpg')}}" class="img-responsive" alt="">

                               <div class="menu-info">
                                    <div class="menu-item">
                                         <h3>Self-made Salad</h3>
                                         <p>Green / Fruits / Healthy</p>
                                    </div>
                                    <div class="menu-price">
                                         <span>$18</span>
                                    </div>
                               </div>
                          </a>
                     </div>
                </div>

                <div class="col-md-4 col-sm-6">
                     <!-- MENU THUMB -->
                     <div class="menu-thumb">
                          <a href="{{url('/frontend/images/menu-image3.jpg')}}" class="image-popup" title="Chinese Noodle">
                               <img src="{{url('/frontend/images/menu-image3.jpg')}}" class="img-responsive" alt="">

                               <div class="menu-info">
                                    <div class="menu-item">
                                         <h3>Chinese Noodle</h3>
                                         <p>Pepper / Chicken / Vegetables</p>
                                    </div>
                                    <div class="menu-price">
                                         <span>$34</span>
                                    </div>
                               </div>
                          </a>
                     </div>
                </div>

                <div class="col-md-4 col-sm-6">
                     <!-- MENU THUMB -->
                     <div class="menu-thumb">
                          <a href="{{url('/frontend/images/menu-image4.jpg')}}" class="image-popup" title="Rice Soup">
                               <img src="{{url('/frontend/images/menu-image4.jpg')}}" class="img-responsive" alt="">

                               <div class="menu-info">
                                    <div class="menu-item">
                                         <h3>Rice Soup</h3>
                                         <p>Green / Chicken</p>
                                    </div>
                                    <div class="menu-price">
                                         <span>$28</span>
                                    </div>
                               </div>
                          </a>
                     </div>
                </div>

                <div class="col-md-4 col-sm-6">
                     <!-- MENU THUMB -->
                     <div class="menu-thumb">
                          <a href="{{url('/frontend/images/menu-image5.jpg')}}" class="image-popup" title="Project title">
                               <img src="{{url('/frontend/images/menu-image5.jpg')}}" class="img-responsive" alt="">

                               <div class="menu-info">
                                    <div class="menu-item">
                                         <h3>Deli Burger</h3>
                                         <p>Beef / Fried Potatoes</p>
                                    </div>
                                    <div class="menu-price">
                                         <span>$46</span>
                                    </div>
                               </div>
                          </a>
                     </div>
                </div>

                <div class="col-md-4 col-sm-6">
                     <!-- MENU THUMB -->
                     <div class="menu-thumb">
                          <a href="{{url('/frontend/images/menu-image6.jpg')}}" class="image-popup" title="Project title">
                               <img src="{{url('/frontend/images/menu-image6.jpg')}}" class="img-responsive" alt="">

                               <div class="menu-info">
                                    <div class="menu-item">
                                         <h3>Big Flat Fried</h3>
                                         <p>Pepper / Crispy</p>
                                    </div>
                                    <div class="menu-price">
                                         <span>$30</span>
                                    </div>
                               </div>
                          </a>
                     </div>
                </div>


           </div>
      </div>
 </section>





 <!-- CONTACT -->
 <section id="contact" data-stellar-background-ratio="0.5">
      <div class="container">
           <div class="row">
                <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
                <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                <div class="wow fadeInUp about-image" data-wow-delay="0.6s">

                        <img src="{{url('/frontend/images/p2.jpg')}}" class="img-responsive" alt="">
                        <p style="color:black;">Make People Happy </p>
                   </div>
                </div>

                <div class="col-md-6 col-sm-12">

                     <div class="col-md-12 col-sm-12">
                          <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                               <h2>Contact Us</h2>
                          </div>
                     </div>

                     <!-- CONTACT FORM -->
                     <form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

                          <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                          <h6 class="text-success">Your message has been sent successfully.</h6>

                          <!-- IF MAIL NOT SENT -->
                          <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                          <div class="col-md-6 col-sm-6">
                               <input type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
                          </div>

                          <div class="col-md-6 col-sm-6">
                               <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                          </div>

                          <div class="col-md-12 col-sm-12">
                               <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">

                               <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell about your project"></textarea>

                               <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                          </div>
                     </form>
                </div>

           </div>
      </div>
 </section>

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
                               <input type="number" class="form-control" name="phone" placeholder="Phone">
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

 @endsection
