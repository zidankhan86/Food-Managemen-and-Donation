@extends('frontend.master')
@section('content')

 <!-- MENU-->
 <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Dishes</h2>
                              <h4>Our Service &amp; Food</h4>
                         </div>
                    </div>

                    @foreach($dishes as $data)
                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                            <!--  <a href="{{url('/frontend/images/menu-image1.jpg')}}" class="image-popup" title="American Breakfast"> -->
                                   <img src="{{url('/uploads/'.$data->image)}}" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Category: {{$data->category}}</h3>
                                             <p>Food Name: {{$data->name}}</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>Price: {{$data->price}} BDT</span>
                                             <span>Stock: {{$data->stock}}</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
                    @endforeach
               </div>
          </div>
     </section>





@endsection
