@extends('frontend.master')
@section('content')

 <!-- MENU-->
 <section id="menu" data-stellar-background-ratio="0.5">
    <div class="container">
         <div class="row">

              <div class="col-md-12 col-sm-12">
                   <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Our Gallery</h2>
                        <h4>Smile &amp; Donate</h4>
                   </div>
              </div>

              <div class="col-md-4 col-sm-6">
                   <!-- MENU THUMB -->
                   <div class="menu-thumb">
                        <a href="{{url('/frontend/images/menu-image1.jpg')}}" class="image-popup" title="American Breakfast">
                             <img src="{{url('/frontend/images/menu-image1.jpg')}}" class="img-responsive" alt="">

                             <div class="menu-info">
                                  <div class="menu-item">
                                       <h3>Donate and Smile</h3>

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
                                       <h3>Donate and Smile</h3>

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
                                       <h3>Donate and Smile</h3>

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
                                       <h3>Donate and Smile</h3>

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
                                       <h3>Donate and Smile</h3>

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
                                       <h3>Donate and Smile</h3>

                                  </div>
                                  
                             </div>
                        </a>
                   </div>
              </div>


         </div>
    </div>
</section>



@endsection
