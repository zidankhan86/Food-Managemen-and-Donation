@extends('backend.admin')
@section('content')
<h2> Organization Form</h2>
<form  action="{{route('organization.store')}}" method="POST"> 
  @csrf
  @if($errors->any())
@foreach($errors->all() as $message)
<p class="alert alert-danger">{{$message}}</p>
@endforeach
  @endif
  <div class="form-group">
    <label for="name">Enter Org Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter org Name">
  </div>
  
  <div class="form-group">
    <lebel for="id">org ID</lebel>
    <input type="text" class="form-control" name="id" placeholder="Enter org id ">
  </div>
  <div class="form-group">
    <lebel for="details">Organization Contract</lebel>
    <input type="text" class="form-control" name="details" placeholder="Enter Contract ">
  </div>
  
  
  <div><button type="submit" class="btn btn-primary">Submit</button></div>
</form>
@endsection