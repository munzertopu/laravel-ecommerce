@extends('admin.index')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12" id="activity-table">
      <div class="heading">
        <h3>Latest orders</h3>
      </div>
      <div class="table-responsive table-hover">
        <table class="table">
          <thead>
            <tr>
              <th>Invoice ID</th>
              <th>Customer ID</th>
              <th>Customer NAME</th>
              <th>Total Price</th>
              <th>Date Time</th>
              <th>Status</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody>
            @foreach($invoice as $inv)
            <tr>
            <td >{{$inv->id}} </td>
            <td >{{$inv->customerid}} </td>
            <td >{{$inv->name}} </td>
            <td >{{$inv->price}} </td>
            <td >{{$inv->datetime}} </td>
            @if($inv->status=='ON_PROCESS')
            <td style="color:blue" >{{$inv->status}} </td>
            @endif
            @if($inv->status!='ON_PROCESS')
            <td style="color:green" >{{$inv->status}} </td>
            @endif
              <td><a style="color: green" href="{{route('order.orderDetails', [$inv->id])}}">Details</a></td>
            </td>

            </tr>

            @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection