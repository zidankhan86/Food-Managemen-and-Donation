@extends('backend.admin')
@section('content')
<div class="container">
<form href="{{url('/category')}}"></a>
  <div class="form-group">
    <label for="category_form">Enter Restaurent Name</label>
    <input type="text" class="form-control" id="category_form" aria-describedby="emailHelp" placeholder="Enter Your Name">
  </div>
  
  <div class="form-group">
    <label for="producttype">Enter Restaurent ID</label>
    <input type="text" class="form-control" id="producttype" placeholder="Enter ID">
  </div>

  

  <div class="form-group">
    <label for="images">Choose an Image</label>
    <input type="file" class="form-control" id="images" placeholder="img">
  </div>

  <div class="form-group">
    <textarea for="category_forma">Enter Restaurent Name</textarea>
    <input type="text" class="form-control" id="category_forma" aria-describedby="emailHelp" placeholder="Enter Description">
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
</div>

@endsection