@extends('backend.admin')
@section('content')
<h4>Food List </h4>
<a href="" class="btn btn-success">Food Request Info</a>
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
                                            {{$foodrequest   ->links()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

@endsection

