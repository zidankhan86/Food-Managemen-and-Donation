@extends('backend.admin')

@section('content')
<h5 style="text-align:center ;">Organization</h5>
<div class="btn btn-success" >
<a href="{{url('/organization/form')}}" style="color:white">Edit </a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Org Name</th>
      <th scope="col">Org ID</th>
      <th scope="col">Org Status</th>
      <th scope="col">Org Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>1Takar Ahar</td>
      <td>1231</td>
      <td>active/not-active</td>
      <td>Social</td>
      <td>On/OFF</td>
    </tr>
  </tbody>
</table>

@endsection
