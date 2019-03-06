@extends('user.index')

@section('content')
<!-- <div class="row">
<div class="col-xl-2">
  <h2>List Group With Linked Items</h2>
  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action">First item</a>
    <a href="#" class="list-group-item list-group-item-action">Second item</a>
    <a href="#" class="list-group-item list-group-item-action">Third item</a>
  </div>
</div>
</div> -->

@php($totalquantity = 0)
@php($totalprice = 0)
<div class="container">
    <h3>Cartlist Items</h3>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <table class="table table-hover" style="border: 1px solid gray">
                <thead>
                    <tr style="background-color: gray">
                        <!-- <th>ID</th> -->
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @php ($message = '')
                    @php ($sms = 1)
                    @forelse($products as $prd)
                        @if($prd->quantity < $prd->cartquantity)
                        <tr style="background-color: brown; color: white">
                        @php ($sms = 0)
                        @php ($message = 'some of the products quantity are not available')
                        @endif
                        @if($prd->quantity >= $prd->cartquantity)
                        <tr style="background-color: lightgray">
                        @endif
                          <!-- <td >{{$prd->id}} </td> -->
                          <td><img src="{{asset('images')}}/product/{{$prd->image}}" class="img-thumbnail" height="100" width="100"></td>
                          <td >{{$prd->name}} </td>
                          <td >{{$prd->selling_price}} </td>
                          <td >{{$prd->cartquantity}} </td>
                          <td >{{$prd->cartquantity * $prd->selling_price}} </td>
                        @php($totalquantity += $prd->cartquantity)
                        @php($totalprice += $prd->cartquantity * $prd->selling_price)
                          <td ><a href="{{route('userCart.delete', [$prd->id])}}">Remove</a></td>
                        </tr>
                    @empty
                        @php ($sms = 0)
                        @php ($message = 'Empty Cart')
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <table class="table">
                <thead>
                    <tr style="color: brown; font-size: 20px">
                        <th>Total</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Quantity: {{$totalquantity}}</th>
                        <th>Price: {{$totalprice}}</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div>
        <form method="post">
            {{csrf_field()}}
            @if($sms == 0)
                <a href="{{route('cart.showAll')}}" class="btn btn-danger" style="float: right; ">Process To Checkout</a>
            @endif
            @if($sms == 1)
                <a href="{{route('cart.checkOut')}}" class="btn btn-success" style="float: right; ">Process To Checkout</a>
            @endif
        </form>
    </div>
    <br>
    <div>
        <h3 style="color: brown">{{$message}}</h3>
    </div>
</div>
@endsection