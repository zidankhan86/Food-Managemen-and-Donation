@include('frontend.master')
@section('content')

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


@endsection