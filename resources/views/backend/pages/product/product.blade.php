@extends('backend.admin')
@section('content')
<h5 style="text-align:center ;">Product List</h5>
<div class="btn btn-success" >
<a href="{{url('/product/form')}}" style="color:white">Edit Product</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product ID</th>
      <th scope="col">Product color</th>
      <th scope="col">Product Price</th>
      <th scope="col"> Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Rice</td>
      <td>1231</td>
      <td>active/not-active</td>
      <td>Social</td>
      <td>Delete</td>
      <td>Delete</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>1Takar Ahar</td>
      <td>1231</td>
      <td>active/not-active</td>
      <td>Social</td>
      <td>Delete</td>
      <td>Delete</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>1Takar Ahar</td>
      <td>1231</td>
      <td>active/not-active</td>
      <td>Social</td>
      <td>Delete</td>
      <td>Delete</td>
    </tr>
  </tbody>
</table>

@endsection