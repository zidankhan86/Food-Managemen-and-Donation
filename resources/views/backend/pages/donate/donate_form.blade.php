@extends('backend.admin')
@section('content')
<form action="{{url('/donate')}}">
  <div class="form-group">
    <label for="donaitor_name">Enter Donaitor Name</label>
    <input type="text" class="form-control" name="donaitor_name" aria-describedby="emailHelp" placeholder="Enter Donaitor Name">
  </div>

  <div class="form-group">
    <label for="donation_amount">Donation Amount</label>
    
    <input type="text" class="form-control" name="donation_amount" placeholder="Enter Amount">
  </div>
  <div class="form-group">
    <label for="status"> Status</label>
    <input type="text" class="form-control" name="status" placeholder="Select Status">
    
  </div>
  <div class="form-group">
    <label for="img">Donation Image</label>
    <input type="file" class="form-control" name="img" placeholder="Select an Image">
  </div>
  
</form>
@endsection