@extends('backend.admin')
@section('content')
<h5 style="text-align:center ;">Product List</h5>
<div class="btn btn-success" >
<a href="{{route('product.form')}}" style="color:white">Add Product</a>
</div>
 <!-- /# column -->
 <div class="col-lg-11">
                            <div class="card">
                                
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>

                                                <tr>
                                                    
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Color</th>
                                                    <th scope="col"> Price</th>
                                                    <th scope="col"> Stock</th>
                                                    <th scope="col"> Image</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                               @foreach($product_list as $data)
                                                <tr>
                                                <td scope="col"> {{$data->id}}</td>
                                                    <td scope="col">{{$data->name}} </td>
                                                    <td scope="col">{{$data->category}} </td>
                                                    <td scope="col">{{$data->color}} </td>
                                                    <td scope="col"> {{$data->price}}</td>
                                                    <td scope="col">{{$data->stock}} </td>
                                                    <td scope="col">
                                                        <img width="50px" src="{{url('/uploads/'.$data->image)}}" alt="Product Image">
                                                    </td>
                                                    <td scope="col">
                                                        <a class="btn btn-info" href="">View</a>
                                                        <a class="btn btn-success" href="">Update</a>
                                                        <a class="btn btn-danger" href="">Delete</a>

                                                    </td>
                                                    
                                                    
                                                    
                                                </tr>
                                              @endforeach
                                              
                                            </tbody>
                                        </table>


                                        {{$product_list->links()}}


@endsection