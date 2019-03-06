@extends('layout.main')

@section('body')
<body style="background-color: lightgray">
	<nav class="navbar fixed-top navbar-expand-sm bg-dark navbar-dark">
		<!-- Brand -->
		<a class="navbar-brand" href="{{route('products.index')}}" >Home</a>

		<!-- Links -->
		<ul class="navbar-nav mr-auto" >
			<!-- Dropdown -->
			<li class="nav-item dropdown" >
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				Products
				</a>
				<div class="dropdown-menu" >
					<a class="dropdown-item" href="{{route('products.showallsearch',[0])}}">ALL Category</a>
					@foreach($catagory as $cat)
						<a class="dropdown-item" href="{{route('products.showallsearch',[$cat->id])}}">{{$cat->name}} </a>
					@endforeach
				</div>
			</li>
		</ul>

		@if(session()->has('loggedUser'))
			<ul class="navbar-nav ml-auto">
			    @if(session()->get('loggedUser')->type == "CUSTOMER")
			    <li class="nav-item">
			    	<a class="nav-link" href="{{route('wishlist.show')}}">Wish List</a>
			    </li>
			    <li class="nav-item">
			  		<a class="nav-link" href="{{route('cart.showAll')}}">Cart List</a>
				</li>
				<li class="nav-item dropdown" >
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
					My Account
					</a>
					<div class="dropdown-menu" >
						<a class="dropdown-item" href="{{route('invoice.index')}}">My Transactions</a>
						<a class="dropdown-item" href="{{route('user.profile')}}">Profile</a>
						<a class="dropdown-item" href="{{route('user.password')}}">Update password</a>
					</div>
				</li>
				<li class="nav-item">
			    	<a class="nav-link" href="{{route('logout.index')}}">Logout</a>
			    </li>
			    @endif
			</ul>
		@endif

		@if(!session()->has('loggedUser'))
		<ul class="navbar-nav ml-auto">
		    <li class="nav-item">
		    	<a class="nav-link" href="{{route('login.index')}}">Login</a>
		    </li>
		</ul>
		@endif
	</nav>
	<br>
	@yield('content')
</body>
@endsection