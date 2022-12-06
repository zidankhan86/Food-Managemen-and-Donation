@extends('backend.admin')
@section('content')
<form action="{{route('customer.update', $customer_data->id)}}" method="post">
 @csrf
 @method('put')
  @if($errors->any())
@foreach($errors->all() as $message)
<p class="alert alert-danger">{{$message}}</p>
@endforeach
  @endif


  <h1>Customer Form</h1>
  <div class="form-group">
    <label for="customer_name" style="color: black;">Enter Customer Name</label>
    <input value="{{$customer_data->customer_name}}" type="text" class="form-control input-rounded" name="customer_name" aria-describedby="emailHelp" placeholder="Enter Customer Name">
  </div>
  <div class="form-group">
    <lebel for="email">E-mail</lebel>
    <input value="{{$customer_data->customer_email}}" type="email" class="form-control input-rounded" name="email" placeholder="Enter e-mail ">
  </div>
  <div class="form-group">
    <lebel for="contract">Contract</lebel>
    <input value="{{$customer_data->contract}}" type="tel" class="form-control input-rounded" name="contract" placeholder="Enter contract ">
  </div>

  <div class="form-group">
    <lebel for="address">Address</lebel>
    <input value="{{$customer_data->customer_address}}" name="address" class="form-control input-rounded" placeholder="Enter Address">
  </div>
    <lebel>Select Gender</lebel>
    <select name="gander" id="" class="form-control">
        <option @if($customer_data->gander=='Male') selected @endif value="Male">Male</option>
        <option @if($customer_data->gander=='Female') selected @endif value="Female">Female</option>
    </select>



  <button type="submit" class="btn btn-primary mt-3">Update</button>
</form>

@endsection
