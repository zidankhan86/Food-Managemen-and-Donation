@extends('backend.admin')
@section('content')
<form action="{{url('/donate')}}">
  <div class="form-group">
    <h4>Donate Form</h4>
    <lebel>Enter Donatior Name</lebel>

   <input type="text" class="form-control input-rounded" name="name" placeholder="Enter Donatior Name">
   </div>

  <div class="form-group">
    <label for="donation_amount">Donation Amount</label>
    
    <input type="text" class="form-control input-rounded" name="donation_amount" placeholder="Enter Amount">
  </div>
  <div class="form-group">
    <label for="status"> Status</label>
    <input type="text" class="form-control input-rounded" name="status" placeholder="Select Status">
    
  </div>
  <div class="form-group">
    <label for="img">Donation Image</label>
    <input type="file" class="form-control input-roundedl" name="img" placeholder="Select an Image">
  </div>
  
</form>
@endsection