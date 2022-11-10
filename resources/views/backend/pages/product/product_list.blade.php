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
                                                    <th>SL</th>
                                                    <th>Product ID</th>
                                                    <th>Product Name</th>
                                                    <th>Product Type</th>
                                                    <th>Product Category</th>
                                                    <th> Color</th>
                                                    <th> Price</th>
                                                    <th> Description</th>
                                                    <th> Stock</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                               
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Blue Backpack For Baby</td>
                                                    <td><span class="badge badge-danger">Extended</span></td>
                                                    <td>January 25</td>
                                                    <td class="color-danger">$14.85</td>
                                                    <td>Add/Delete</td>
                                                    <td>Add/Delete</td>
                                                    <td>Add/Delete</td>
                                                    <td>Add/Delete</td>
                                                    
                                                </tr>
                                               
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Blue Backpack For Baby</td>
                                                    <td><span class="badge badge-danger">Extended</span></td>
                                                    <td>January 25</td>
                                                    <td class="color-danger">$14.85</td>
                                                    <td>Add/Delete</td>
                                                    <td>Add/Delete</td>
                                                    <td>Add/Delete</td>
                                                    <td>Add/Delete</td>
                                                    <td>Add/Delete</td>
                                                </tr>
                                               
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Blue Backpack For Baby</td>
                                                    <td><span class="badge badge-danger">Extended</span></td>
                                                    <td>January 25</td>
                                                    <td class="color-danger">$14.85</td>
                                                    <td>Add/Delete</td>
                                                    <td>Add/Delete</td>
                                                    <td>Add/Delete</td>
                                                    <td>Add/Delete</td>
                                                    <td>Add/Delete</td>
                                                </tr>
                                              
                                            </tbody>
                                        </table>





@endsection