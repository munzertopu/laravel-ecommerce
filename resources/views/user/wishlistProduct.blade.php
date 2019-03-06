@extends('user.index')

@section('content')

@php($totalquantity = 0)
@php($totalprice = 0)
<div class="container">
    <h3>Wishlist Items</h3>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <table class="table table-hover" style="border: 1px solid gray">
                <thead>
                    <tr style="background-color: gray">
                        <!-- <th>ID</th> -->
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $prd)
                        <tr>
                            <!-- <td >{{$prd->id}} </td> -->
                            <td><img src="{{asset('images')}}/product/{{$prd->image}}" class="img-thumbnail" height="100" width="100"></td>
                            <td><a href="{{route('userProduct.details', [$prd->id])}}">{{$prd->name}}</a></td>
                            <td>{{$prd->selling_price}} </td>
                            @if($prd->status=='INSTOCK')
                                <td style="color:green" >{{$prd->status}} </td>
                                <td ><a href="{{route('userCart.addToCartWish', [$prd->id])}}">Add To Cart</a> | <a href="{{route('userWishlist.deleteFromWish', [$prd->id])}}">Remove</a></td>
                            @endif
                            @if($prd->status!='INSTOCK')
                                <td style="color:brown" >{{$prd->status}} </td>
                                <td style="color:brown">Not Available</td>
                            @endif
                        </tr>
                    @empty
                        <h3 style="color: red">Wishlist empty</h3>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<table class="table  table-hover">
    
    
  </table>
@endsection