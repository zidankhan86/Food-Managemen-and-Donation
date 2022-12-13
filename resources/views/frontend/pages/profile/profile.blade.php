@extends('frontend.master')
@section('content')
<div class="container-fluid mt-5">
    <div class="row mt-5">
        <div class="col-md-3">
        </div>
        <div class="col-md-3">
            <div class="img-container mt-5">
                <p class="fs-5 mt-5">Customer Profile</p>
                <img class="w-25 h-auto" src="https://cdn.pixabay.com/photo/2015/03/04/22/35/avatar-659651__340.png" alt="">
            </div>

        </div>
        <div class="col-md-3">
            <form action="" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <br><br><br><br><br><br>

                    <div>
                        <label for="">Name:</label>
                        <input required value="{{auth()->user()->name   }}" name="name" type="text" class="form-contro" required placeholder="Enter name">
                    </div>
                    <div>
                        <label for="">Email:</label>
                        <input required value="{{auth()->user()->email}}" name="email" type="email" class="form-contro" required placeholder="Enter email">
                    </div>
                    <div>
                        <label for="">Phone:</label>
                        <input required value="{{auth()->user()->phone}}" name="phone" type="text" class="form-contro" required placeholder="Enter number">
                    </div>
                    <div>
                        <label for="">Address:</label>
                        <input required value="{{auth()->user()->address}}" name="address" type="text" class="form-contro" required placeholder="Enter address">
                    </div>

                    </div>
                </form>
                </div>
            <div class="col-md-2">
        </div>
    </div>
    <div class="container">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-striped
                        table-hover
                        table-borderless
                        table-primary
                        align-middle">
                            <thead class="table-light">
                                <caption>Requested food info</caption>
                                <tr>
                                    <th>Food Id</th>
                                    <th>Status</th>
                                    <th>Requested On</th>
                                </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @foreach ($ngoFoodRequest as $item)

                                    <tr class="table-primary" >
                                        <td>{{$item->food_id}}</td>
                                        <td>{{$item->status}}</td>
                                        <td scope="row">{{$item->updated_at->diffForHumans()}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>

                                </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>








@endsection

