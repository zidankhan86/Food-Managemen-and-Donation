@extends('frontend.master')
@section('content')
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
                    <br>
                    <br>
                        <img src="{{url('/frontend/images/p2.jpg')}}" class="img-responsive" alt="">
                        <p style="color:black;">Make People Happy </p>
                   </div>
                </div>

                <div class="col-md-6 col-sm-12">

                     <div class="col-md-12 col-sm-12">
                          <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <br>
                              <br> <h2>Contact Us</h2>
                          </div>
                     </div>

                     <!-- CONTACT FORM -->
                     <form action="{{route('contract.us')}}" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">
                        @csrf
                          <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                          <h6 class="text-success">Your message has been sent successfully.</h6>

                          <!-- IF MAIL NOT SENT -->
                          <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                          <div class="col-md-6 col-sm-6">
                               <input type="text" class="form-control" id="cf-name" name="name" required placeholder="Full name">
                          </div>

                          <div class="col-md-6 col-sm-6">
                               <input type="email" class="form-control" id="cf-email" name="email" required placeholder="Email address">
                          </div>

                          <div class="col-md-12 col-sm-12">
                               <input type="text" class="form-control" id="cf-subject" name="subject" required  placeholder="Subject">

                               <textarea class="form-control" rows="6" id="cf-message" name="message" required placeholder="Drop Your Comment"></textarea>

                               <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                          </div>
                     </form>
                </div>

           </div>
      </div>
 </section>
@endsection
