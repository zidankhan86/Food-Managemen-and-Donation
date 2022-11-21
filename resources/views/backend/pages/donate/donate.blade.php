@extends('backend.admin')
@section('content')

<h5 style="text-align:center ;">Donaton List</h5>
<div class="btn btn-primary">
    <a href="{{url('/donate/form')}}" style="color:white">Add Donate</a>



</div>


<!-- /# column -->
<div class="col-lg-12">
    <div class="card">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($donate as $data)

                        <tr>
                            <th scope="col">{{$data->id}}</th>
                            <th scope="col">{{$data->donatator_name}}</th>
                            <th scope="col">{{$data->phone}}</th>
                            <th scope="col">{{$data->email}}</th>
                            <th scope="col">{{$data->amount}}</th>

                        </tr>
                        @endforeach
                    </tbody>
                </table>






                @endsection