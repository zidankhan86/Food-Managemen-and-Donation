@extends('backend.admin')
@section('content')

<h5 style="text-align:center ;">Customer List</h5>
<div class="btn btn-success" >
<a href="{{route('customer.form')}}" style="color:white">Add Customer</a>
</div>

<!-- /# column -->
<div class="col-lg-11">
                            <div class="card">

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>

                                                    <th scope="col">Customer ID</th>
                                                    <th scope="col">Customer Name</th>
                                                    <th scope="col">Customer E-mail</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Contract</th>
                                                    <th scope="col">Gender</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($customer as $data)

                                                <tr>

                                                    <td scope="col">{{$data->id}}</td>
                                                    <td scope="col">{{$data->customer_name}}</td>
                                                    <td scope="col">{{$data->customer_email}}</td>
                                                    <td scope="col">{{$data->customer_address}}</td>
                                                    <td scope="col">{{$data->contract}}</td>
                                                    <td scope="col">{{$data->gander}}</td>

                                                    <td scope="col">
                                                       <!-- <a class="btn btn-info" href="">View</a>-->
                                                        <a class="btn btn-success" href="{{route('customer.edit',$data->id)}}">Edit</a>
                                                        <a class="btn btn-danger" href="{{route('customer.delete',$data->id)}}">Delete</a>

                                                    </td>


                                                </tr>

                                               @endforeach

                                            </tbody>
                                        </table>
    {{$customer->links()}}


@endsection
