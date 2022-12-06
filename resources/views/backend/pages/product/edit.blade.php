@extends('backend.admin')
@section('content')

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
  <button type="submit" class="btn btn-success">Update</button>
</form>

@endsection
