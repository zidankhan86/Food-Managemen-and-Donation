@extends('backend.admin')
@section('content')

<h5 style="text-align:center ;">Customer List</h5>
<div class="btn btn-success" >
<a href="{{url('/customer/form')}}" style="color:white">Edit Customer</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Customer Name</th>
      <th scope="col"> Customer Contract</th>
      <th scope="col">E-mail</th>
      <th scope="col">Address</th>
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