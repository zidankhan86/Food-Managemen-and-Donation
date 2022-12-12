@extends('backend.admin')


@section('content')


                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-hand-point-right color-success border-success"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total<br> Food Request</div>
                                        <div class="stat-digit">{{$totalRequest}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total<br> NGO</div>
                                        <div class="stat-digit">{{$totalNgo}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user color-pink border-pink"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total<br> Restaurant</div>
                                        <div class="stat-digit">{{$totalRes}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>


@endsection
