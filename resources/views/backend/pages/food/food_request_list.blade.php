@extends('backend.admin')
@section('content')
<br>
<h1 style="text-align: center" class="btn btn-primary" >Food Request List </h1>

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
                                                        <th>Organization Name</th>
                                                        <th>Status</th>
                                                        <th>Quantity</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($foodrequest as $data)
                                                    <tr>
                                                        <th scope="col">{{$data->id}}</th>
                                                        <td scope="col">{{$data->food[0]->food_name}}</td>
                                                        <td scope="col">{{$data->organization->name}}</td>
                                                        <td scope="col">{{$data->status}}</td>
                                                        <td scope="col">{{$data->quantity}}</td>
                                                        <td scope="col">
                                                       <!-- <a class="btn btn-info" href="">View</a>-->
                                                        <a class="btn btn-success" href="{{route('approve',$data->id)}}">Approve</a>
                                                        <a class="btn btn-danger" href="{{route('reject',$data->id)}}">Reject</a>

                                                    </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                            {{$foodrequest   ->links()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

@endsection

