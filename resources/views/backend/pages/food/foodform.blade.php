@extends('backend.admin')
@section('content')
<br>
<h5 style="text-align:center">Food List</h5>
<br>
<br>
<form action="{{route('food.store')}}" method="POST">
        @csrf


       <div class="form-group">
        <br>
        <h1>Food Name</h1>
             <div class="input-group input-group-rounded">
                <input type="text" placeholder="Enter Food Name" name="food_name" class="form-control">

        </div>
        <br>
        <h1>User Id</h1>
        <select name="user_id" id="user_id" class="form-control">
                @foreach($users as $data)
                <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
        </select>
        <br>
        <h1>Quantity</h1>
        <div class="form-group">

             <div class="input-group input-group-rounded">
                <input type="number" placeholder="Enter User quantity" name="quantity" class="form-control">

        </div>
        <br>
        <button type="submit" class="btn btn-success">Submit</button>

        </form>
@endsection
