@extends('frontend.master')
@section('content')
    <div class="container">
        <div>
            <div style="margin-top:100px" class="">
                <br>
                <h5 style="text-align:center">Food List</h5>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form action="{{ route('food.foodFrontend') }}" method="POST" enctype="multipart/form-data"
                             >
                            @csrf

                            <br><br><br>
                            <div class="form-group">

                                <h5>Food Name</h5>

                                <input type="text" placeholder="Enter Food Name" name="food_name" class="form-control">

                            </div>


                            <h5>Quantity</h5>
                            <div class="form-group">


                                <input type="number" placeholder="Enter User quantity" name="quantity"
                                    class="form-control">

                            </div>
                            <div class="form-group">

                                <h5>Upload Image</h5>

                                <input type="file" placeholder="Enter User image" name="image" class="form-control">

                            </div>

                            <button type="submit" class="btn btn-success">Submit</button>

                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>

            </div>
        </div>
    </div>
@endsection
