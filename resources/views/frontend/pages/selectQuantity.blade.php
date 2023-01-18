@extends('frontend.master')
@section('content')


<section class="container">
    <div class="container">
        <div class="container mt-4">
            <div class="container">

        <form action="{{route('food.request',$Food->id)}}" method="post">
            @csrf
            <div class="mb-3">
                <h1>Enter Food Quantity</h1><br>
            <label for="" class="form-label">Select Quantity</label>
            <input type="number"
                class="form-control" name="quantity" id="" aria-describedby="helpId" placeholder="">

            </div>
           <br> <button type="submit" class="btn btn-success">Submit</button>
        </form>
            </div>
        </div>
    </div>
</section>

@endsection

