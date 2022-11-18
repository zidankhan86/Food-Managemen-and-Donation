@extends('backend.admin')
@section('content')
<div class="container">
<form action="{{route('restaurent.store')}}" method="post"> 
   @csrf
   @if($errors->any())
@foreach($errors->all() as $message)

@endforeach
<p class="alert alert-danger">{{$message}}</p>
  @endif

  <h3 style="text-align: center;">Restaurant Form</h3>
  <div class="form-group">
    <label for="name">Enter Restaurant Name</label>
    <input type="text" class="form-control input-rounded" name="name" aria-describedby="emailHelp" placeholder="Enter Restaurant Name">
  </div>
  
  <div class="form-group">
    <label for="location">Enter Restaurant Location</label>
    <input type="text" class="form-control input-rounded" name="location" placeholder="Enter Location">
  </div>

  
<label for="img">image</label>
<input type="file" id="img" class="form-control input-rounded" name="img">
<label for="description">Description</label>
<input type="text" id="description" class="form-control input-rounded" name="description">





  <div class="form-group">
    <label for="contract">Choose Contract</label>
    <input type="number" class="form-control input-rounded" name="contract" placeholder="Enter Contract">
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