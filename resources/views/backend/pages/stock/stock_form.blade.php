@extends('backend.admin')
@section('content')

<h4 style="text-align: center;">Add Stock</h4>
<form action="{{route('stock.form')}}" method="post" >

   <div class="form-group">
    <label for="stock_id">Stock ID</label>
    <input type="text" class="form-control input-rounded" name="stock_id"  placeholder="Enter Stock">
  </div>

   <div class="form-group">
    <label for="stock">Stock Items</label>
    <input type="text" class="form-control input-rounded" name="stock_item"  placeholder="Enter Stock Items">
  </div>

   <div class="form-group">
    <label for="stock_type">Stock Type</label>
    <input type="text" class="form-control input-rounded" name="stock_type"  placeholder="Enter Stock Type">
  </div>

 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection