@extends('backend.customer')
@section('content')
<form  href="{{url('/customer')}}"></a>
  <div class="form-group">
    <label for="organization_form">Your Name</label>
    <input type="text" class="form-control" id="organization_form" aria-describedby="emailHelp" placeholder="Enter Name">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

