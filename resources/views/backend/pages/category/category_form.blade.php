@extends('backend.admin')
@section('content')
<form action="{{url('/category')}}">
  <div class="form-group">
    <label for="category_name">Enter Category Name</label>
    <input type="text" class="form-control" name="category_name" aria-describedby="emailHelp" placeholder="Enter Category Name">
  </div>

  <div class="form-group">
    <label for="category_id">Category ID</label>
    
    <input type="text" class="form-control" name="category_id" placeholder="Enter Your Product Type">
  </div>
  <div class="form-group">
    <label for="category_status">Category Status</label>
    <input type="text" class="form-control" name="category_status" placeholder="Select Category Status">
    
  </div>
  <div class="form-group">
    <label for="category_img">Category Image</label>
    <input type="file" class="form-control" name="category_img" placeholder="Select Category Status">
  </div>
  
  <label for="foods">Choose a Meal:</label>
  <select name="food" name="foods">
    <option value="rice">Rice</option>
    <option value="Vegetable">Vegetable</option>
    <option value="pizza">Pizza</option>
    <option value="burger">Burger</option>
  </select><br>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>

</form>

@endsection
