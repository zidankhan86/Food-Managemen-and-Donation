@extends('backend.admin')
@section('content')

<h5 style="text-align:center ;">Donaton List</h5>



<!-- /# column -->
<div class="col-lg-12">
    <div class="card">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th >ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($donate as $data)

                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->amount}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>




{{$donate->links()}}
<div class="container">
    <div class="container">
        <div class="mx-auto">
            <h5 class="text-center">Total Donation collected: {{$totalDonation}} Taka</h5>
        </div>
    </div>
</div>
                @endsection
