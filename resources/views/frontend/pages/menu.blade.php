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
                                    <a href="{{route('food.request',$data->id)}}" class="btn btn-primary">Food request</a>
                                    @endif
                                    @endauth 


                                 </div></div>

                         </div>
                    @endforeach
               </div>
          </div>
     </section>





@endsection
