@extends('admin.index')

@section('content')
<body>
<div class="body-section">
<div class="container">
  <h2>Product details</h2>
  <div class="form-group">
    <img src="{{asset('images')}}/product/{{$products->image}}" class="img-thumbnail" height="200" width="200">
  </div>
  <div class="form-group">
    <label><strong>Id: </strong> {{$products->id}}</label>
  </div>
  <div class="form-group">
    <label><strong>Name: </strong> {{$products->name}}</label>
  </div>
  <div class="form-group">
    <label><strong>Buying Price: </strong> {{$products->buying_price}}</label>
  </div>
  <div class="form-group">
    <label><strong>Selling Price: </strong> {{$products->selling_price}}</label>
  </div>
    
  <div class="form-group">
    <label><strong>Quantitiy: </strong> {{$products->quantity}}</label>
  </div>
  <div class="form-group">
    <label><strong>Category: </strong> {{$products->catagory_name}}</label>
  </div>
  <div class="form-group">
    <label><strong>Sub category: </strong> {{$products->subcatagory_name}}</label>
  </div>
  <div class="form-group">
    <label><strong>Description: </strong> {{$products->description}}</label>
  </div>
  <div class="form-group">
    @if ($products->status=="INSTOCK")
    <label><strong>Status: </strong><span style="color:green">{{$products->status}}</span></label>
    @endif
    @if ($products->status!="INSTOCK")
    <label><strong>Status: </strong><span style="color:red">{{$products->status}}</span></label>
    @endif
  </div>
  <a href="{{route('adminProduct.show')}}" class="btn btn-primary">Show All Items</a>
</div>
</div>
</body>

@endsection