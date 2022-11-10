@extends('backend.admin')
@section('content')

<h5 style="text-align:center ;">Customer List</h5>
<div class="btn btn-success" >
<a href="{{url('/customer/form')}}" style="color:white">Add Customer</a>
</div>

<!-- /# column -->
<div class="col-lg-11">
                            <div class="card">
                                
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Customer ID</th>
                                                    <th>Customer Name</th>
                                                    <th>Customer E-mail</th>
                                                    <th>Address</th>
                                                    <th>Contract</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                               
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Blue Backpack For Baby</td>
                                                    <td><span class="badge badge-danger">Extended</span></td>
                                                    <td>January 25</td>
                                                    <td class="color-danger">$14.85</td>
                                                    <td>January 25</td>
                                                    <td class="color-danger">$14.85</td>
                                                    

                                                    
                                                </tr>
                                               
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Blue Backpack For Baby</td>
                                                    <td><span class="badge badge-danger">Extended</span></td>
                                                    <td>January 25</td>
                                                    <td class="color-danger">$14.85</td>
                                                    <td class="color-danger">$14.85</td>
                                                    <td class="color-danger">$14.85</td>
                                                    
                                                </tr>
                                               
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Blue Backpack For Baby</td>
                                                    <td><span class="badge badge-danger">Extended</span></td>
                                                    <td>January 25</td>
                                                    <td class="color-danger">$14.85</td>
                                                    <td class="color-danger">$14.85</td>
                                                    <td class="color-danger">$14.85</td>
                                                    
                                                </tr>
                                              
                                            </tbody>
                                        </table>


@endsection