@extends('backend.admin')
@section('content')
<form href="{{url('/category')}}"></a>
  <div class="form-group">
    <label for="product_form">Enter Product Name</label>
    <input type="text" class="form-control" id="product_form" aria-describedby="emailHelp" placeholder="Enter product Name">
  </div>
  
  <div class="form-group">
    <lebel for="producttype">Product ID</lebel>
    <input type="text" class="form-control" id="producttype" placeholder="Enter a product id ">
  </div>
  <div class="form-group">
    <lebel for="producttype">Price</lebel>
    <input type="text" class="form-control" id="producttype" placeholder="Enter a product Price ">
  </div>
  
  <div class="form-group">
    <textarea for="productdescription">Description</textarea>
    <input type="text" class="form-control" id="productdescription" placeholder="Enter a product Description ">
  </div>

  <div class="form-group">
    <label for="images">Product Image</label>
    <input type="file" class="form-control" id="images" placeholder="img">
  </div>

  <div>
  <label for="meal">Product Color:</label>
  <select name="color" id="color">
    <option value="White">White</option>
    <option value="Red">Red</option>
    <option value="Blue">Blue</option>
    <option value="Black">Black</option>
  </select>

  </div >
  
  <button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection