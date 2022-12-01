@extends('backend.admin')
@section('content')
<form action="{{route('category.update',$category_data->id)}}" method="POST">
  @if($errors->any())
    @foreach($errors->all() as $message)
      <p class="alert alert-danger">{{$message}}</p>
    @endforeach
  @endif

  @csrf
  @method('put')
  <h4 style="text-align:center ;">Category Form</h4>
  <div class="form-group">
    <label for="name">Enter Category Name</label>
    <input required type="text" value="{{$category_data->name}}"  class="form-control input-rounded" name="name" aria-describedby="emailHelp" placeholder="Enter Category Name">
  </div>

  <div class="form-group">
    <label for="c_type">Category Type</label>
    <input required type="text" value="{{$category_data->c_type}}" id="type" class="form-control input-rounded" name="c_type" placeholder="Enter Category Type">
  </div>

  <div class="form-group">
    <label for="status">Category Status</label>
    <select id="status" name="status" class="form-control input-rounded">
      <option @if($category_data->status=='active') selected @endif value="active">Active</option>
      <option @if($category_data->status=='inactive') selected @endif value="inactive">Inactive</option>
    </select>

  </div>
  <div>
  <button type="submit" class="btn btn-primary">Update</button>
  </div>

</form>

@endsection
