@extends('backend.admin')
@section('content')
<form action="{{url('/category/store')}}" method="POST">
  @if($errors->any())
    @foreach($errors->all() as $message)
      <p class="alert alert-danger">{{$message}}</p>
    @endforeach
  @endif

  @csrf
  <h4 style="text-align:center ;">Category Form</h4>
  <div class="form-group">
    <label for="name">Enter Category Name</label>
    <input required type="text" class="form-control input-rounded" name="name" aria-describedby="emailHelp" placeholder="Enter Category Name">
  </div>

  <div class="form-group">
    <label for="c_type">Category Type</label>
    <input required type="text" id="type" class="form-control input-rounded" name="c_type" placeholder="Enter Category Type">
  </div>
  
  <div class="form-group">
    <label for="status">Category Status</label>
    <select id="status" name="status" class="form-control input-rounded">
      <option selected value="active">Active</option>
      <option value="inactive">Inactive</option>
    </select>
    
  </div>
  <div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>

</form>

@endsection
