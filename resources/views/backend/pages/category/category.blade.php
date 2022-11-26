@extends('backend.admin')

@section('content')
<h5 style="text-align:center ;">Category List</h5>
<div class="btn btn-primary" >
<a href="{{route('Category_form')}}" style="color:white">Add Category</a>
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
                                                    <th scope="col">Category Name</th>
                                                    <th scope="col">Cateroy Type</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($category as $data)
                                               
                                                <tr>
                                                    <td scope="col">{{$data->id}}</td>
                                                    <td scope="col">{{$data->name}}</td>
                                                    <td scope="col">{{$data->c_type}}</td>
                                                    <td scope="col">{{$data->status}}</td>                                                    
                                                    <td scope="col">
                                                        <a href="">delete</a>
                                                        <a href="">Edit</a>
                                                        <a href="">Update</a>
                                                    </td>                                                    <td>Add/Delet/edit</td>
                                                    
                                                </tr>
                                                @endforeach

                                               
                                              
                                            </tbody>
                                        </table>
                                        {{$category->links()}}
@endsection