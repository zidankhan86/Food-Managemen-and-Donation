@extends('backend.admin')
@section('content')
<h2> Organization Form</h2>
<form  action="{{route('organization.store')}}" method="POST"> 
  @csrf
  
  <div class="form-group">
    <label for="name">Enter Org Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter org Name">
  </div>
  
  <div class="form-group">
    <lebel for="id">org ID</lebel>
    <input type="text" class="form-control" name="id" placeholder="Enter org id ">
  </div>
  <div class="form-group">
    <textarea for="details">Organization Details</textarea>
    <input type="text" class="form-control" name="details" placeholder="Enter details ">
  </div>
  
  <div class="form-group">
    <lebel for="img">org Image</lebel>
    <input type="file" class="form-control" name="img" placeholder="Enter image ">

  </div>
  <div><button type="submit" class="btn btn-primary">Submit</button></div>
</form>
@endsection