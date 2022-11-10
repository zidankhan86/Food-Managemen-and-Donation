@extends('backend.admin')
@section('content')
<form action="{{url('/category/store')}}" method="POST">
  <h4 style="text-align:center ;">Category Form</h4>
  @csrf
  <div class="form-group">
    <label for="name">Enter Category Name</label>
    <input type="text" class="form-control input-rounded" name="name" aria-describedby="emailHelp" placeholder="Enter Category Name">
  </div>

  <div class="form-group">
    <label for="c_type">Category Type</label>
    <input type="text" id="type" class="form-control input-rounded" name="c_type" placeholder="Enter Category Type">
  </div>
  
  <div class="form-group">
    <label for="status">Category Status</label>
    <select id="status" name="status" class="form-control input-rounded">
      <option value="active">Active</option>
      <option value="inactive">Inactive</option>
    </select>
    
  </div>
  <div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>

</form>

@endsection
