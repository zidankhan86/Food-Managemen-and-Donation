@extends('backend.admin')
@section('content')

<h5 style="text-align:center ;">Payment List</h5>


<!-- /# column -->
<div class="col-lg-11">
                            <div class="card">

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                                <thead>
                                                <tr>
                                                    <tr>

                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">City Name</th>
                                                    <th scope="col">Contract</th>
                                                    <th scope="col">Amount</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($paymentList as $key=>$data)
                                                <tr>

                                                    <td scope="col">{{$key+1}}</td>
                                                    <td scope="col">{{$data->name}}</td>
                                                    <td scope="col">{{$data->email}}</td>
                                                    <td scope="col">{{$data->city_name}}</td>
                                                    <td scope="col">{{$data->phone}}</td>
                                                    <td scope="col">{{$data->amount}}</td>



                                                </tr>
                                                @endforeach


                                            </tbody>
                                        </table>


@endsection
