@extends('backend.admin')
@section('content')


<div class="container">
    <div class="container">
        <form action="{{route('report.generate.submit')}}" method="post">

            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Date</label>
              <input type="date" class="form-control" id="exampleInputEmail1"  placeholder="Date" name="from_date">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Date</label>
              <input type="date" class="form-control" id="date" placeholder="Date" name="to_date">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>



  <div class="container">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Food ID</th>
                    <th>User ID</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($foodrequest as $data)
                <tr>
                    <th scope="col">{{$data->id}}</th>
                    <td scope="col">{{$data->food_id}}</td>
                    <td scope="col">{{$data->user_id}}</td>
                    <td scope="col">{{$data->status}}</td>
                    <td scope="col">
                   <!-- <a class="btn btn-info" href="">View</a>-->
                    <a class="btn btn-success" href="{{route('approve',$data->id)}}">Approve</a>
                    <a class="btn btn-danger" href="{{route('reject',$data->id)}}">Reject</a>

                </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
  </div>

  @endsection
