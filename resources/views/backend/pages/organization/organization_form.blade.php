@extends('backend.admin')
@section('content')

<form  href="{{url('/organization')}}">
  <div class="form-group">
    <label for="product_form">Enter Org Name</label>
    <input type="text" class="form-control" id="product_form" aria-describedby="emailHelp" placeholder="Enter org Name">
  </div>
  
  <div class="form-group">
    <lebel for="producttype">org ID</lebel>
    <input type="text" class="form-control" id="producttype" placeholder="Enter org id ">
  </div>
  <div class="form-group">
    <textarea for="producttype">Organization Details</textarea>
    <input type="text" class="form-control" id="producttype" placeholder="Enter details ">
  </div>
  
  <div class="form-group">
    <lebel for="productdescription">org Image</lebel>
    <input type="file" class="form-control" id="productdescription" placeholder="Enter image ">

  </div>
  <div><button type="submit" class="btn btn-primary">Submit</button></div>
</form>
@endsection