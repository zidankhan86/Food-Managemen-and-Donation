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

          <!--  4. Copy only URL and paste it within the src="" field below
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


 @endsection
