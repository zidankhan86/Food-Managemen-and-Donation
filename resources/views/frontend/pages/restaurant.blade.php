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
                   <div>

                  <p style="text-align:center ;color:black"> Important :</p> <br>
                    Food Management and Donation system is non-profit Organization.If you are interested to donate food for free then go to form and fill up all the information . No exchange and refound for food .Than you for you kindness.

                   </div>

              </div>

              <div class="col-md-6 col-sm-12">

                   <div class="col-md-12 col-sm-12">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                             <h2  style="text-align:center">RESTAURANT FORM</h2>
                        </div>
                   </div>

                   <!-- CONTACT FORM -->
                   <form action="{{route('restaurant.donateForm')}}" method="POST" enctype="multipart/form-data" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">
                   @csrf
                        <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                        <h6 class="text-success">Your message has been sent successfully.</h6>

                        <!-- IF MAIL NOT SENT -->
                        <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                        <div class="col-md-6 col-sm-6">

                            <input type="text" class="form-control" id="cf-name" name="name" placeholder="Your Name">
                        </div>
                        <div class="col-md-6 col-sm-6">

                            <input type="text" class="form-control" id="cf-name" name="category" placeholder="Your Phone">
                        </div>
                        <div class="col-md-6 col-sm-6">

                            <input type="text" class="form-control" id="cf-name" name="dish_item" placeholder="Enter Your Email">
                        </div>
                        <div class="col-md-6 col-sm-6">

                        <input type="number" class="form-control" id="cf-name" name="price" placeholder="Enter Amount">
                        </div>

                        <div class="col-md-6 col-sm-6">
                  <select>
                    <option value="">Dhaka</option>
                    <option value="">Barishal</option>
                    <option value="">chittagong</option>
                    <option value="">Rajshahi</option>
                    <option value="">Khulna</option>
                </div>
                            <input type="text" class="form-control" id="cf-email" name="City" placeholder="Select City">

                    </select>

                        <div class="col-md-12 col-sm-12">

                             <button type="submit" class="form-control" id="cf-submit" >CONFIRM DONATE</button>
                        </div>
                   </form>
              </div>

         </div>
    </div>
</section>

@endsection
