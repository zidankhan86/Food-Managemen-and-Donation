@extends('backend.admin')
@section('content')
<form action="{{route('customer.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="customer_name" style="color: black;">Enter Customer Name</label>
    <input type="text" class="form-control" name="customer_name" aria-describedby="emailHelp" placeholder="Enter Customer Name">
  </div>
  <div class="form-group">
    <lebel for="email">E-mail</lebel>
    <input type="email" class="form-control" name="email" placeholder="Enter e-mail ">
  </div>

  <div class="form-group">
    <lebel for="address">Address</lebel>
    <textarea name="address" class="form-control"></textarea>
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