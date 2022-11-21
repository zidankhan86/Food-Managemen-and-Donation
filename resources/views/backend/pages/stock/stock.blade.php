@extends('backend.admin')
@section('content')

<h5 style="text-align:center ;">Stock Form</h5>
<div class="btn btn-primary" >
<a href="{{route('stock.form')}}" style="color:white">Add Stock</a>
</div>
<table class="table table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    
  </tbody>
</table>

@endsection