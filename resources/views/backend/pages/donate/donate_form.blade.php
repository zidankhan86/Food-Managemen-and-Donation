@extends('backend.admin')
@section('content')
<form action="{{route('donate.store')}}" method="post">
  @csrf
 <h4 style="text-align: center">Donate Form</h4>
  <div class="form-group">
    <lebel for="name">Enter Donatior Name</lebel>
   <input type="text" class="form-control input-rounded" name="name" placeholder="Enter Donatior Name">
   </div>
   
  <div class="form-group">
    <lebel for="phone">Enter Donatior Phone</lebel>
   <input type="tel" class="form-control input-rounded" name="phone" placeholder="Enter Donatior Phone">
   </div><div class="form-group">
    <label for="email">Donation E-mail</label>
    <input type="email" class="form-control input-rounded" name="email" placeholder="Enter E-mail">
  </div>
  <div class="form-group">
    <label for="amount">Donation Amount</label>
    <input type="number" class="form-control input-rounded" name="amount" placeholder="Enter Amount">
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>
  
</form>
@endsection