@extends('backend.admin')
@section('content')

<h4 style="text-align: center;">Add Stock</h4>
<form action="{{route('stock.store')}}" method="post" >
    @csrf
   <div class="form-group">
    <label for="quantity">Quantity</label>
    <input type="text" class="form-control input-rounded" name="quantity"  placeholder="Enter Stock">
  </div>

   <div class="form-group">
    <label for="item">Stock Items</label>
    <input type="text" class="form-control input-rounded" name="item"  placeholder="Enter Stock Items">
  </div>

   <div class="form-group">
    <label for="type">Stock Type</label>
    <input type="text" class="form-control input-rounded" name="type"  placeholder="Enter Stock Type">
  </div>

 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection