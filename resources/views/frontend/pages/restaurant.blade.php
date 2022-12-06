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
                   <form action="{{route('restaurant.donate')}}" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

                        <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                        <h6 class="text-success">Your message has been sent successfully.</h6>

                        <!-- IF MAIL NOT SENT -->
                        <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                        <div class="col-md-6 col-sm-6">

                             <input type="text" class="form-control" id="cf-name" name="name" placeholder="Restaurant Name">
                        </div>
                        <div class="col-md-6 col-sm-6">

                             <input type="text" class="form-control" id="cf-name" name="category" placeholder="Category Name">
                        </div>
                        <div class="col-md-6 col-sm-6">

                             <input type="text" class="form-control" id="cf-name" name="dish_item" placeholder="Dish Name">
                        </div>
                                                <div class="col-md-6 col-sm-6">

                        <input type="number" class="form-control" id="cf-name" name="price" placeholder="Enter Price">
                        </div>
                        <div class="col-md-6 col-sm-6">
                             <input type="email" class="form-control" id="cf-email" name="location" placeholder="Restaurant Location">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <input type="file" class="form-control" id="cf-email" name="image" placeholder="Upload Food Image">
                       </div>

                       <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="cf-email" name="description" placeholder="Enter Food Description">
                   </div>
                   <div class="col-md-6 col-sm-6">
                    <input type="number" class="form-control" id="cf-email" name="contract" placeholder="Enter Restaurant Contract">
               </div>
               <div class="col-md-6 col-sm-6">
                    <input type="text" class="form-control" id="cf-email" name="quantity" placeholder="Enter  quantity">
               </div>

                        <div class="col-md-12 col-sm-12">

                             <button type="submit" class="form-control" id="cf-submit" >CONFIRM DONATE</button>
                        </div>
                   </form>
              </div>

         </div>
    </div>
</section>

@endsection
