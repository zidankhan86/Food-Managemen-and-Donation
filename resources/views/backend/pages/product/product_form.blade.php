@extends('backend.admin')
@section('content')
<form href="{{url('/category')}}"></a>
  <div class="form-group">
    <label for="name">Enter Product Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter product Name">
  </div>
  
  <div class="form-group">
    <lebel for="category">Product Category</lebel>
    <input type="text" class="form-control" name="category" placeholder="Enter a product category ">
  </div>
  <div class="form-group">
    <lebel for="price">Price</lebel>
    <input type="text" class="form-control" name="price" placeholder="Enter a product Price ">
  </div>
  
  <div class="form-group">
    <lebel for="stock">Stock</lebel>
    <input type="text" class="form-control" name="stock" placeholder="Enter a product Stock ">
  </div>
  

  <div class="form-group">
    <label for="image">Product Image</label>
    <input type="file" class="form-control" name="image" placeholder="img">
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