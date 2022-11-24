@extends('backend.admin')
@section('content')

<h5 style="text-align:center ;">Stock Form</h5>
<div class="btn btn-primary" >
<a href="{{route('stock.form')}}" style="color:white">Add Stock</a>
</div>
<table class="table table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Stock Type</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
@foreach($stock as $data)
    <tr>
      <th scope="col">{{$data->}}</th>
      <td scope="col">{{$data->}}</td>
      <td scope="col">{{$data->}}</td>
      <td scope="col">@{{$data->}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection