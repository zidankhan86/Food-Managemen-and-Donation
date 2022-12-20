@extends('backend.admin')
@section('content')
<h4>Food List </h4>
<a href="{{route('food.create')}}" class="btn btn-success">Add Food</a>
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-title">
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Food Name</th>
                                                        <th>User ID</th>
                                                        <th>Quantity</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($food as $data)
                                                    <tr>
                                                        <th scope="col">{{$data->id}}</th>
                                                        <td scope="col">{{$data->food_name}}</td>
                                                        <td scope="col">{{$data->user_id}}</td>
                                                        <td>{{$data->quantity}}</td>
                                                      <td>
                                                       <!-- <a class="btn btn-success" href="">Edit</a>-->
                                                        <a class="btn btn-danger" href="{{route('food.delete',$data->id)}}">Delete</a></td>

                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                            {{$food->links()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

@endsection
