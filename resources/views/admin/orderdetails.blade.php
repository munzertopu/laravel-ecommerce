@extends('admin.index')

@section('content')
<div class="container-fluid">
    <div class="form-group">
      <label><strong>Id:</strong> {{$customer->loginid}}</label>
    </div>
    <div class="form-group">
      <label><strong>Name:</strong> {{$customer->name}}</label>
    </div>
    <div class="form-group">
      <label><strong>Email:</strong> {{$customer->email}}</label>
    </div>
    <div class="form-group">
      <label><strong>Phone:</strong> {{$customer->phone}}</label>
    </div>
    <div class="form-group">
      <label><strong>Address:</strong> {{$customer->address}}</label>
    </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12" id="activity-table">
      <div class="heading">
        <h3>Orders</h3>
      </div>
      <div class="table-responsive table-hover">
        <table class="table">
          <thead>
            <tr>
              <th>Image</th>
              <th>Product name</th>
              <th>Quantity</th>
              <th>Unit price</th>
              <th>Total price</th>
            </tr>
          </thead>
          <tbody>
            @foreach($orderList as $inv)
            <tr>
            <td><img src=" {{asset('images')}}/product/{{$inv->image}}" height="80" width="80"></td>
            <td><a href="{{route('adminProduct.details',[$inv->productid])}}">{{$inv->productname}}</a> </td>
            <td>{{$inv->quantity}}</td>
            <td>{{$inv->price}}</td>
            <td>{{$inv->total_price}}</td>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <a style="float: right;" href="{{route('invoice.deliver', [$invoiceid])}}"><button class="btn btn-success">Deliver</button></a>
  <a style="float: left;" href="{{route('invoice.cancel', [$invoiceid])}}"><button class="btn btn-danger">Cancel</button></a>
</div>
@endsection