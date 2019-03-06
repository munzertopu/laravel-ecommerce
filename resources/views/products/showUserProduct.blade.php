@extends('user.index')

@section('content')
<div class="body-section">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div id="demo" class="carousel slide" data-ride="carousel">
				<ul class="carousel-indicators">
				    <li data-target="#demo" data-slide-to="0" class="active"></li>
				    <li data-target="#demo" data-slide-to="1"></li>
				    <li data-target="#demo" data-slide-to="2"></li>
			  	</ul>

				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="{{asset('images')}}/carousel-image.jpg" alt="LOVE">
					</div>
					<div class="carousel-item">
						<img src="{{asset('images')}}/carousel-image (1).png" alt="DESI WEDDING">
					</div>
					<div class="carousel-item">
						<img src="{{asset('images')}}/carousel-image (2).png" alt="LOVE">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<hr>
<br>
<div class="container-fluid">
	@forelse($products->chunk(4) as $productList)
		<div class="row">
		@foreach($productList as $prd)
		<div  class="col-md-3 col-xl-3">
			<div class="card product-body">
		    <!-- <img class="card-img-top" src="images/product.jpg" alt="Card image" width="400" height="300"> -->
			    <div class="card-body">
					<center><img src="{{asset('images')}}/product/{{$prd->image}}" class="img-thumbnail"></center>
					<h4 class="card-title" >Product: <span style="color:blue">{{$prd->name}}</span> </h4>
					<!-- <p class="card-text"> <h6>Product ID: PR_{{$prd->id}} </h6> </p> -->
					<!-- <p class="card-text"> <h6>Category: {{$prd->catagory_name}} -> {{$prd->subcatagory_name}} </h6> </p> -->
					<!-- <p class="card-text"> <h6>Description: {{$prd->description}} </h6></p> -->
					<h5>PRICE: <span style="color:green">{{$prd->selling_price}}</span> </h5>
					<h5>STATUS:
					@if($prd->status=='INSTOCK')
						<span style="color:green">{{$prd->status}}</span>
					@endif
					@if($prd->status!='INSTOCK')
						<span style="color:red">{{$prd->status}}</span>
					@endif
					</h5>
					<a href="{{route('userProduct.details',[$prd->id])}}" class="btn btn-info">Details</a>
					@php ($wshid = -1)
					@if(session()->has('loggedUser'))
						@forelse($wishlist as $wsh)
							@if($prd->id == $wsh->productid)
								@php ($wshid = 1)
								@break
							@endif

							@if($prd->id != $wsh->productid)
								@php ($wshid = 0)
							@endif
						@empty
							<a href="{{route('userWishlist.addToWish', [$prd->id])}}" title="add to wishlist"><span id="wish-section"><img src="{{asset('images')}}/wish.png"></span></a>
						@endforelse
						@if($wshid==1)
							<a href="{{route('userWishlist.deleteFromWish', [$prd->id])}}" title="remove from wishlist"><span id="wish-section"><img src="{{asset('images')}}/wished.png"></span></a>
						@endif
						@if($wshid==0)
							<a href="{{route('userWishlist.addToWish', [$prd->id])}}" title="add to wishlist"><span id="wish-section"><img src="{{asset('images')}}/wish.png"></span></a>
						@endif
					@endif

					@if($prd->status=='INSTOCK')
						<a href="{{route('userCart.add',[$prd->id])}}" title="Add to cart"><span id="add-cart-section"><img src="{{asset('images')}}/add-cart.png"></span></a>
					@endif
			    </div>
			</div>
		</div>
		<br>
		@endforeach
	</div>
	<br>
	@empty
		<h4 style="color: red">NO PRODUCT FOUND</h4>
	@endforelse
</div>
</div>
@endsection