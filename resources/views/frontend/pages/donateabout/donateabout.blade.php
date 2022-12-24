@extends('frontend.master')
@section('content')



<!-- ABOUT -->
<section id="about" data-stellar-background-ratio="0.5">
    <div class="container">
         <div class="row">

              <div class="col-md-6 col-sm-12">
                   <div class="about-info">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                             <br><h4 style="color:black ;">Leave A Message For Food Donation And Management System</h4>
                         <h4 style="color:black ;">How We All Can Make People Happy By Donating Unused Food </h4>
                        </div>

<div class="wow fadeInUp" data-wow-delay="0.4s">

<textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Leave A Message For Betterment"></textarea>
<button class="btn btn-success" type="submit" class="form-control" id="cf-submit" name="submit">Leave Message</button>
     </div>

       </div>
            </div>

              <div class="col-md-6 col-sm-12">
                   <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                        <img src="{{url('/frontend/images/p1.jpg')}}" class="img-responsive" alt="">
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
                   <div>

                  <p style="text-align:center ;color:black"> Important :</p> <br>
                    Food Management and Donation system is non-profit Organization. Your donations to us are tax deductible! On request we will issue a donation receipt.We will provide you money recept . Your donation will help people also you can make people happy by your small donation.Thank you for small contribution.<br>Thanks for Visit Our Site


                   </div>

              </div>

              <div class="col-md-6 col-sm-12">

                   <div class="col-md-12 col-sm-12">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                             <h2  style="text-align:center">Donate Here</h2>
                        </div>
                   </div>

                   <!-- CONTACT FORM -->
                   <form action="{{route('ssl.payment')}}" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">
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

                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="cf-email" name="city_name"required  placeholder="City Name">
                       </div>

                       <div class="col-md-6 col-sm-6">
                        <input type="number" class="form-control" id="cf-email" name="phone" required placeholder="phone">
                   </div>
                   <div class="col-md-6 col-sm-6">
                    <input type="number" class="form-control" id="cf-email" name="amount" required placeholder="Enter Amount">
               </div>

                        <div class="col-md-12 col-sm-12">


                             <textarea class="form-control" rows="6" id="cf-message" name="message" required placeholder="Leave A Comment"></textarea>

                             <button type="submit" class="form-control" id="cf-submit" name="submit"><i class="fa fa-credit-card"></i>PAY WITH CARD/BKASH</button>
                        </div>
                   </form>
              </div>

         </div>
    </div>
</section>

@endsection
