@extends('backend.admin')
@section('content')
<form action="{{url('/category/store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Enter Category Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Category Name">
  </div>

  <div class="form-group">
    <label for="c_type">Category Type</label>
    
    <input type="text" id="type" class="form-control" name="c_type" placeholder="Enter Category Type">
  </div>
  <div class="form-group">
    <label for="status">Category Status</label>


    <select id="status" name="status" class="form-control">
      <option value="active">Active</option>
      <option value="inactive">Inactive</option>
    </select>
    
  </div>
  <div class="form-group">
    <label for="img">Category Image</label>
    <input type="file" class="form-control" name="img" placeholder="Select Category image">
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
