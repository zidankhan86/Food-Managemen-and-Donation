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

                    <div class="row">
                         @foreach($dishes as $data)
                              <div class="col-md-3">
                              <div class="card" style="width: 18rem;">
                                   <img width="300px" src="{{url('/uploads/'.$data->image)}}" class="card-img-top" alt="...">
                                   <div class="card-body">
                                        <h5 class="card-title">  Stock: {{$data->quantity}}</h5>
                                        <p class="card-text">Food Name: {{$data->food_name}}.<br>Price: {{$data->price}}Free</p>
                                   <a href="{{route('food.request',$data->id)}}" class="btn btn-primary">Food request</a>
                                   </div>
                              </div>
                              </div>
                         @endforeach
                    </div>
               </div>
          </div>
     </section>





@endsection
