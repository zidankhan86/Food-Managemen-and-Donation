@extends('backend.admin')

@section('content')
<h5 style="text-align:center ;">Category List</h5>
<div class="btn btn-primary" >
<a href="{{url('/category/form')}}" style="color:white">Edit Category</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Category Name</th>
      <th scope="col"> ID</th>
      <th scope="col"> Status</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>101</td>
      <td>oyyo</td>
      <td>active/not-active</td>
      <td>category description</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>101</td>
      <td>oyyo</td>
      <td>active/not-active</td>
      <td>category description</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>101</td>
      <td>oyyo</td>
      <td>active/not-active</td>
      <td>category description</td>
    </tr>
  </tbody>
</table>
@endsection