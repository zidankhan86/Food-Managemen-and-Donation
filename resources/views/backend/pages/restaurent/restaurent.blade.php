@extends('backend.admin')
@section('content')
<h5 style="text-align:center ;">Restaurent List</h5>
<div class="btn btn-primary" >
<a href="{{url('/restaurent/form')}}" style="color:white">Add Restaurant</a>
</div>

                        <!-- /# column -->
                        <div class="col-lg-11">
                            <div class="card">
                                
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    
                                                    <th scope="col"> ID</th>
                                                    <th scope="col">Restauren Name</th>
                                                    <th scope="col">Location</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Restauren Description</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($restaurant as $data)
                                               
                                                <tr>
                                                    <th scope="col">{{$data->id}}</th>
                                                    <td scope="col">{{$data->name}}</td>
                                                    <td scope="col">{{$data->location}}</td>
                                                    <td scope="col">{{$data->image}}</td>
                                                    <td scope="col">{{$data->description}}</td>
                                                    <td scope="col">
                                                        <a href="" class="btn btn-primary">delete</a>
                                                        <a href="" class="btn btn-info">edit</a>
                                                        <a href="" class="btn btn-danger">update</a>
                                                    </td>
                                                    
                                                    
                                                </tr>
                                               
                                                
                                               @endforeach
                                              
                                            </tbody>
                                          
                                        </table>
                                        {{$restaurant->links()}}

@endsection
