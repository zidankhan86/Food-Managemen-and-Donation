@extends('backend.admin')
@section('content')
<div class="container">
<form action="{{route('restaurent.store')}}" method="post"> 
  @csrf
  <div class="form-group">
    <label for="name">Enter Restaurent Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Restaurant Name">
  </div>
  
  <div class="form-group">
    <label for="location">Enter Restaurent Location</label>
    <input type="text" class="form-control" name="location" placeholder="Enter Location">
  </div>

  

  <div class="form-group">
    <label for="image">Choose an Image</label>
    <input type="file" class="form-control" name="image" placeholder="img">
  </div>

  <div class="form-group">
    <textarea for="description">Enter Restaurent Description</textarea>
    <input type="text" class="form-control" name="description" aria-describedby="emailHelp" placeholder="Enter Description">
    
  </div>

  <div>
  <label for="meal">Choose an Option:</label>
  <select name="food" id="foods">
    <option value="rice">Food</option>
    <option value="Vegitable">Others</option>
  </select>
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>

</form>


@endsection