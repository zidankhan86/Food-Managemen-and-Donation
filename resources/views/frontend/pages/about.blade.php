@extends('frontend.master')
@section('content')

  <!-- ABOUT -->
  <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                  <br> <h4>Read our story</h4>
                                   <h2>We've started making people happy since 2022</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>We wanted to do something different for Bangladesh . In our country there are lot of restaurant they wast huge amount of food due to unsold perspective</p>
                                   <p>We wanted to reach all of those restaurant and we will use all of those unsold food . We are making people happy every single day.Our mission is to Make people happy every moment <br>Thank you.</p>
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


@endsection
