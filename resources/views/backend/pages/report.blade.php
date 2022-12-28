@extends('backend.admin')
@section('content')
<div class="container">
    <div class="container">
        <div class="container mx-auto my-5">
            <h2 class="text-center">
                Food Request Report
            </h2>
        </div>
    </div>
</div>

<div class="container"  >
    <div class="container">
        <form action="{{route('report.generate.submit')}}" method="post">

            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Date</label>
              <input type="date" class="form-control" id="exampleInputEmail1"  placeholder="Date" name="from_date">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Date</label>
              <input type="date" class="form-control" id="date" placeholder="Date" name="to_date">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>



  <div class="container" id="printableArea">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Food Name</th>
                    <th>Orgnanization name</th>
                    <th>Request Hours and Day</th>
                    <th>Status</th>

                </tr>
            </thead>
            <tbody>
                @foreach($foodrequest as $data)
                <tr>
                    <th scope="col">{{$data->id}}</th>
                    <td scope="col">{{$data->food[0]->food_name}}</td>
                    <td scope="col">{{$data->organization->name}}</td>
                    <td scope="col">{{$data->created_at->diffForHumans()}}</td>
                    <td scope="col">{{$data->status}}</td>


                   <!-- <a class="btn btn-info" href="">View</a>-->


                </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-1"></div>
        <button class="btn btn-success" onclick="printDiv('printableArea')" value="print a div!" >Print</button>
    </div>
    <div class="col-md-7"></div>
</div>


<script>
        function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
        }
</script>




  @endsection
