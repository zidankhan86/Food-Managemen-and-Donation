@extends('backend.admin')
@section('content')
<h1 style="text-align: center;">Add a Product</h1>
<form action="{{route('product.update',$product_data->id)}}" method="post" enctype="multipart/form-data">

@csrf
@method('put')

@if($errors->any())
@foreach($errors->all() as $message)
@endforeach
<p class="alert alert-danger">{{$message}}</p>
@endif

  <div class="form-group">
    <label for="name">Enter Product Name</label>
    <input type="text" class="form-control input-rounded" value="{{$product_data->name}}" name="name" aria-describedby="emailHelp" placeholder="Enter product Name">
  </div>

  <div class="form-group">
    <lebel for="category">Product Category</lebel>
    <input type="text" class="form-control input-rounded" value="{{$product_data->category}}" name="category" placeholder="Enter a product category ">
  </div>
  <div class="form-group">
    <lebel for="price">Price</lebel>
    <input type="text" class="form-control input-rounded" value="{{$product_data->price}}" name="price" placeholder="Enter a product Price ">
  </div>

  <div class="form-group">
    <lebel for="stock">Stock</lebel>
    <input type="text" class="form-control input-rounded" value="{{$product_data->stock}}" name="stock" placeholder="Enter a product Stock. ">
  </div>


  <div class="form-group">
    <label for="image">Product Image</label>
    <input type="file" class="form-control input-rounded" name="image" placeholder="img">
  </div>

  <div>
  <label for="meal">Product Color:</label>
  <select name="color" name="color">
    <option value="White">White</option>
    <option value="Red">Red</option>
    <option value="Blue">Blue</option>
    <option value="Black">Black</option>
  </select>

  </div >

  <button type="submit" class="btn btn-success">Update</button>
</form>

@endsection
