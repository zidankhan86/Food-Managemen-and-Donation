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
                                                    
                                                    <th scope="col">Product ID</th>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Product Type</th>
                                                    <th scope="col">Product Category</th>
                                                    <th scope="col"> Color</th>
                                                    <th scope="col"> Price</th>
                                                    <th scope="col"> Description</th>
                                                    <th scope="col"> Stock</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                               
                                                <tr>
                                                    
                                                    <td scope="col"> </td>
                                                    <td scope="col"> </td>
                                                    <td scope="col"> </td>
                                                    <td scope="col"> </td>
                                                    <td scope="col"> </td>
                                                    <td scope="col"> </td>
                                                    <td scope="col"> </td>
                                                    <td scope="col"> </td>
                                                    
                                                </tr>
                                              
                                              
                                            </tbody>
                                        </table>





@endsection