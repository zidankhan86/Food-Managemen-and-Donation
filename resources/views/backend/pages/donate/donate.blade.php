@extends('backend.admin')
@section('content')

<h5 style="text-align:center ;">Donaton List</h5>
<div class="btn btn-primary" >
<a href="{{url('/donate/form')}}" style="color:white">Edit </a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Donatior Name</th>
      <th scope="col">Donation Amount</th>
      <th scope="col"> Status</th>
      <th scope="col">Donatior Address</th>
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
