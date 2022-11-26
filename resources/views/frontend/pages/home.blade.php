 @extends('frontend.master')
 @section('content')
 <!-- HOME -->
 <div class="row">

      <div class="owl-carousel owl-theme">
           <div class="item item-first">
                <div class="caption">
                     <div class="container">
                          <div class="col-md-8 col-sm-12">
                               <h3>Eatery Cafe &amp; Restaurant</h3>
                               <h1>Our mission is to provide an unforgettable experience</h1>
                               <a href="#team" class="section-btn btn btn-default smoothScroll">Meet our chef</a>
                          </div>
                     </div>
                </div>
           </div>

           <div class="item item-second">
                <div class="caption">
                     <div class="container">
                          <div class="col-md-8 col-sm-12">
                               <h3>Your Perfect Breakfast</h3>
                               <h1>The best dinning quality can be here too!</h1>
                               <a href="#menu" class="section-btn btn btn-default smoothScroll">Discover menu</a>
                          </div>
                     </div>
                </div>
           </div>

           <div class="item item-third">
                <div class="caption">
                     <div class="container">
                          <div class="col-md-8 col-sm-12">
                               <h3>New Restaurant in Town</h3>
                               <h1>Enjoy our special menus every Sunday and Friday</h1>
                               <a href="#contact" class="section-btn btn btn-default smoothScroll">Reservation</a>
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
                               <h2>We've been Making The Delicious Foods Since 1999</h2>
                          </div>

                          <div class="wow fadeInUp" data-wow-delay="0.4s">
                               <p>Fusce hendrerit malesuada lacinia. Donec semper semper sem vitae malesuada. Proin scelerisque risus et ipsum semper molestie sed in nisi. Ut rhoncus congue lectus, rhoncus venenatis leo malesuada id.</p>
                               <p>Sed elementum vel felis sed scelerisque. In arcu diam, sollicitudin eu nibh ac, posuere tristique magna. You can use this template for your cafe or restaurant website. Please tell your friends about <a href="https://plus.google.com/+templatemo" target="_parent">templatemo</a>. Thank you.</p>
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


 <!-- TEAM -->
 <section id="team" data-stellar-background-ratio="0.5">
      <div class="container">
           <div class="row">

                <div class="col-md-12 col-sm-12">
                     <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                          <h2>Meet our chefs</h2>
                          <h4>They are nice &amp; friendly</h4>
                     </div>
                </div>

                <div class="col-md-4 col-sm-4">
                     <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                          <img src="{{url('/frontend/images/team-image1.jpg')}}" class="img-responsive" alt="">
                          <div class="team-hover">
                               <div class="team-item">
                                    <h4>Duis vel lacus id magna mattis vehicula</h4>
                                    <ul class="social-icon">
                                         <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                         <li><a href="#" class="fa fa-envelope-o"></a></li>
                                    </ul>
                               </div>
                          </div>
                     </div>
                     <div class="team-info">
                          <h3>New Catherine</h3>
                          <p>Kitchen Officer</p>
                     </div>
                </div>

                <div class="col-md-4 col-sm-4">
                     <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                          <img src="{{url('/frontend/images/team-image2.jpg')}}" class="img-responsive" alt="">
                          <div class="team-hover">
                               <div class="team-item">
                                    <h4>Cras suscipit neque quis odio feugiat</h4>
                                    <ul class="social-icon">
                                         <li><a href="#" class="fa fa-instagram"></a></li>
                                         <li><a href="#" class="fa fa-flickr"></a></li>
                                    </ul>
                               </div>
                          </div>
                     </div>
                     <div class="team-info">
                          <h3>Lindsay Perlen</h3>
                          <p>Owner &amp; Manager</p>
                     </div>
                </div>

                <div class="col-md-4 col-sm-4">
                     <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                          <img src="{{url('/frontend/images/team-image3.jpg')}}" class="img-responsive" alt="">
                          <div class="team-hover">
                               <div class="team-item">
                                    <h4>Etiam auctor enim tristique faucibus</h4>
                                    <ul class="social-icon">
                                         <li><a href="#" class="fa fa-github"></a></li>
                                         <li><a href="#" class="fa fa-google"></a></li>
                                    </ul>
                               </div>
                          </div>
                     </div>
                     <div class="team-info">
                          <h3>Isabella Grace</h3>
                          <p>Pizza Specialist</p>
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


 <!-- TESTIMONIAL -->
 <section id="testimonial" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
           <div class="row">

                <div class="col-md-12 col-sm-12">
                     <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                          <h2>Testimonials</h2>
                     </div>
                </div>

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                     <div class="owl-carousel owl-theme">
                          <div class="item">
                               <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum ullamcorper nulla non.</p>
                               <div class="tst-author">
                                    <h4>Digital Carlson</h4>
                                    <span>Pharetra quam sit amet</span>
                               </div>
                          </div>

                          <div class="item">
                               <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed vestibulum orci quam.</p>
                               <div class="tst-author">
                                    <h4>Johnny Stephen</h4>
                                    <span>Magna nisi porta ligula</span>
                               </div>
                          </div>

                          <div class="item">
                               <p>Vivamus aliquet felis eu diam ultricies congue. Morbi porta lorem nec consectetur porta quis dui elit habitant morbi.</p>
                               <div class="tst-author">
                                    <h4>Jessie White</h4>
                                    <span>Vitae lacinia augue urna quis</span>
                               </div>
                          </div>

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
                     <div id="google-map">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" allowfullscreen></iframe>
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