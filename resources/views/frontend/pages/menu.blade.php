@extends('frontend.master')
@section('content')

 <!-- MENU-->
 <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Food Added For Donation</h2>
                              <h4>By Volunteer &amp; restaurant</h4>
                         </div>
                    </div>

                </div>
                <div style="display: grid;
                 grid-template-columns: 25% 25% 25% 25%;">
                    @foreach($dishes as $data)
                         <div style="margin-bottom: 15px;margin-right:5px">
                                <div>
                                     <img style="width:100%" src="{{url('/uploads/'.$data->image)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                         <h5 class="card-title">  Stock: {{$data->quantity}}</h5>
                                         <p class="card-text">Food Name: {{$data->food_name}}.<br>Price: {{$data->price}}Free</p>

                                   @auth

                                    @if(auth()->user()->role !='restaurant')
                                        <div class="row" style="margin-bottom: 3px">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-4"><a href="{{route('menu.dishes.details', $data->id)}}" class="btn btn-success">View Details</a>
                                              </div>
                                            <div class="col-md-4">  <a href="{{route('food.request.selectQauntity',$data->id)}}" class="btn btn-primary">CONFIRM REQUEST</a></div>
                                            <div class="col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <a href="{{route('add.to.cart',$data->id)}}" class="btn btn-info">Add to card</a>
                                        </div>
                                    @endif
                                    @endauth


                                 </div></div>

                         </div>
                    @endforeach
               </div>
          </div>
     </section>





@endsection
