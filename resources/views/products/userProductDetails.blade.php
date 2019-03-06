@extends('user.index')

@section('content')
<div class="body-section">
<div class="row">
	<div  class="container">
	  	<div class="card product-body" style="width:80%">
		    <center><img src="{{asset('images')}}/product/{{$product->image}}" class="img-thumbnail" height="300" width="300"></center>
		    <div class="card-body">
		      	<h4 class="card-title" >Product: <span style="color:blue">{{$product->name}}</span> </h4>
		      	<!-- <p class="card-text"> <h6>Product ID: PR_{{$product->id}} </h6> </p> -->
				<p class="card-text"> <h6>Category: {{$product->catagory_name}}</h6></p>
				<p class="card-text"><h6>Sub category: {{$product->subcatagory_name}}</h6> </p>
		      	<p class="card-text"> <h6>Description: {{$product->description}} </h6></p>

		      	<h5>PRICE: <span style="color:green">{{$product->selling_price}}</span> </h5>
		      	<h5>STATUS:
		      	@if($product->status=='INSTOCK')
		      		<span style="color:green">{{$product->status}}</span>
		      	@endif
		      	@if($product->status!='INSTOCK')
		     		<span style="color:red">{{$product->status}}</span>
		      	@endif
		      	</h5>

		      	@php ($wshid = -1)
	      		@if(session()->has('loggedUser'))
		      		@forelse($wishlist as $wsh)
		      			@if($product->id == $wsh->productid)
			      			@php ($wshid = 1)
			      			@break
		      			@endif
		      			@if($product->id != $wsh->productid)
		      				@php ($wshid = 0)
		      			@endif
					@empty
	      				<a href="{{route('userWishlist.addToWishDetail', [$product->id])}}" title="add to wishlist"><span id="wish-section2"><img src="{{asset('images')}}/wish.png"></span></a>
	      			@endforelse
	      			@if($wshid==1)
	      				<a href="{{route('userWishlist.deleteFromWishAllDetail', [$product->id])}}"title="remove from wishlist"><span id="wish-section2"><img src="{{asset('images')}}/wished.png"></span></a>
	      			@endif
	      			<br>
	      			@if($wshid==0)
	      				<a href="{{route('userWishlist.addToWishDetail', [$product->id])}}" title="add to wishlist"><span id="wish-section2"><img src="{{asset('images')}}/wish.png"></span></a>
	      			@endif
	      			<br>
	      			<div>
	      				@if($product->status=='INSTOCK')
	      					<form method="post">
								{{csrf_field()}}
	  							<input type="hidden" name="product_id" value="{{$product->id}}">
		      					<input type="number" class="form-control" name="quantity" style="width:110px" value="1">
		      					<h3></h3>
		      					<input type="submit" class="btn btn-warning" style="width:110px" value="AddToCart">
	      					</form>
	      				@endif
	      			</div>
	      		@else
	      			<a href="{{route('login.index')}}" title="add to wishlist"><span id="wish-section2"><img src="{{asset('images')}}/wish.png"></span></a>
	      			@if($product->status=='INSTOCK')
      					<form method="post">
	      					<input type="number" class="form-control" name="quantity" style="width:110px" value="1">
	      					<h3></h3>
	      					<a href="{{route('login.index')}}"><img src="{{asset('images')}}/add-cart.png" height="100px" width="100px"></a>
      				@endif
	      		@endif
	    	</div>
		</div>
	</div>
</div>
</div>
@endsection