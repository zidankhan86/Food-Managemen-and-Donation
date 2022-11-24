@extends('backend.admin')

@section('content')
<h5 style="text-align:center ;">Organization</h5>
<div class="btn btn-success" >
<a href="{{Route('Organization.form')}}" style="color:white">Add Organization </a>
</div>
<!-- /# column -->
<div class="col-lg-11">
                            <div class="card">
                                
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Organization Name</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                
                                            </thead>
                                            <tbody>
                                                @foreach($org as $data)
                                               
                                                <tr>
                                                  
                                                    <td scope="col">{{$data->id}}</td>
                                                    <td scope="col">{{$data->name}}</td>
                                                    <td scope="col">{{$data->details}}</td>
                                                   
                                                    
                                                    
                                                    

                                                    
                                                </tr>
                                               
                                               @endforeach
                                               
                                              
                                            </tbody>
                                        </table>
                                        {{$org->links()}}

@endsection
