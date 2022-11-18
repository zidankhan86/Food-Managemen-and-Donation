@extends('backend.admin')
@section('content')
<form action="{{route('customer.store')}}" method="post">
  @if($errors->any())
@foreach($errors->all() as $message)
<p class="alert alert-danger">{{$message}}</p>
@endforeach
  @endif
  
@csrf
  <h1>Customer Form</h1>
  <div class="form-group">
    <label for="customer_name" style="color: black;">Enter Customer Name</label>
    <input type="text" class="form-control input-rounded" name="customer_name" aria-describedby="emailHelp" placeholder="Enter Customer Name">
  </div>
  <div class="form-group">
    <lebel for="email">E-mail</lebel>
    <input type="email" class="form-control input-rounded" name="email" placeholder="Enter e-mail ">
  </div>
  <div class="form-group">
    <lebel for="contract">Contract</lebel>
    <input type="tel" class="form-control input-rounded" name="contract" placeholder="Enter contranct ">
  </div>

  <div class="form-group">
    <lebel for="address">Address</lebel>
    <textarea name="address" class="form-control input-rounded" placeholder="Enter Address"></textarea>
  </div>

  <div>
    <lebel>Select Gender</lebel><br>
      <input type="radio" id="html" name="gander" value="male">
      <label for="html">Male</label><br>
      <input type="radio" id="css" name="gander" value="female">
      <label for="css">Female</label><br>
      <input type="radio" id="css" name="gander" value="others">
      <label for="css">Others</label>
    <br>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection