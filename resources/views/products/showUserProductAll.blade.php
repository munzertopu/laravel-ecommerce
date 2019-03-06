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
	<div class="row">
		<div class="col-xl-3 col-md-3">
			<div class="row">
				<form method="post">
				    {{csrf_field()}}
				    <div class="col-xl-12 col-md-12">
				    	<input type="hidden" name="category_id" value = "{{$categ}}">
						<!-- <div  class="col-xl-4"> -->
					    <label for="category">Sub-Category:</label>
							<select class="form-control" name="subcategory">
							@if($subcat == 0)
					        	<option value=0>All</option>
					        @endif

					        @foreach($subcategory as $cat)
						        @if($subcat == $cat->id)
						        	<option value="{{$cat->id}}">{{$cat->name}}</option>
						        @endif
					        @endforeach
					        @if($subcat != 0)
						        <option value=0>All</option>
					        @endif

					        @foreach($subcategory as $cat)
						        @if($subcat != $cat->id)
							        <option value="{{$cat->id}}">{{$cat->name}}</option>
						        @endif
					        @endforeach
					    	</select>
				    	<!-- </div> -->
						<br>
						<div class="col-xl-12 col-md-12">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>
			</div>
			<br>
			<div class="row">
				<div class="col-xl-12 col-md-12">
					<!-- <form method="post"> -->
				    <!-- {{csrf_field()}} -->
			    	<div style="width:400px">
			    		<label for="category">Search</label><br>
			      		<input type="text"  name="search" placeholder="Search" value = "{{$srch}}">
			      		<button type="submit" class="btn btn-primary">search</button>
			      	</div>
			  	</div>
		  	</div>
	  	</div>
		<div class="col-xl-9">
			@forelse($products->chunk(3) as $productList)
				<div class="row">
				@foreach($productList as $prd)
					<div  class="col-xl-3">
						<div class="card product-body">
							<div class="card-body">
								<center><img src="{{asset('images')}}//product/{{$prd->image}}" class="img-thumbnail"></center>
							  	<h4 class="card-title" >Product: <span style="color:blue">{{$prd->name}}</span> </h4>
								<!-- <p class="card-text"> <h6>Category: {{$prd->catagory_name}} >> {{$prd->subcatagory_name}} </h6> </p>

							  	<h5>PRICE: <span style="color:green">{{$prd->selling_price}}</span> </h5> -->
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
							  			<a href="{{route('userWishlist.addToWishAll', [$prd->id])}}" title="add to wishlist"><span id="wish-section1"><img src="{{asset('images')}}/wish.png"></span></a>
							  		@endforelse
							  		@if($wshid==1)
							  			<a href="{{route('userWishlist.deleteFromWishAll', [$prd->id])}}" title="remove from wishlist"><span id="wish-section1"><img src="{{asset('images')}}/wished.png"></span></a>
							  		@endif
							  		@if($wshid==0)
							  			<a href="{{route('userWishlist.addToWishAll', [$prd->id])}}" title="add to wishlist"><span id="wish-section1"><img src="{{asset('images')}}/wish.png"></span></a>
							  		@endif
							  	@endif
							  	@if($prd->status=='INSTOCK')
							  		<a href="{{route('userCart.addToCartBack',[$prd->id])}}" title="Add to cart"><span id="add-cart-section"><img src="{{asset('images')}}/add-cart.png"></span></a>
							  	@endif
							</div>
						</div>
					</div>
				@endforeach
			</div>
			<br>
		@empty
			<h4 style="color: red">NO PRODUCT FOUND</h4>
		@endforelse
		</div>
	</div>
</div>
</div>
@endsection