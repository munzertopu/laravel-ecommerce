@extends('layout.main')

@section('body')
<body>
<nav class="navbar fixed-top navbar-expand-sm bg-dark navbar-dark">
  	<!-- Brand -->
	<a class="navbar-brand" href="{{route('admin.index')}}" >Home</a>
	<ul class="navbar-nav ml-auto">
	    @if(session()->has('loggedUser'))
	    <li class="nav-item">
		    <a class="nav-link" href="{{route('logout.index')}}">Logout</a>
		</li>
		@endif
		@if(!session()->has('loggedUser'))
	    <li class="nav-item">
	    	<a class="nav-link" href="{{route('login.index')}}">Login</a>
	    </li>
		@endif
  	</ul>
</nav>
<br>
@if(session()->get('loggedUser')->type == "ADMIN" || session()->get('loggedUser')->type == "SALESMAN")
<div class="container-fluid">
	<div class="row">
		<div class="col-xl-2 col-md-2">
			<div class="sidebar-offcanvas">
				<div class="nav-side-menu col-md-12">
					<div class="menu-list">
						<ul class="menu-content collapse-out" id="left-menu-content">
							<li><a href="{{route('adminProduct.show')}}">Products</a></li>
							<!-- <li><a href="/admin/categories">Categories</a></li>
							<li><a href="/admin/companies">Company</a></li> -->
							<li  data-toggle="collapse" data-target="#products" class="collapsed active">
								<a href="#"><i class="fa fa-gift fa-lg"></i> Activity <span class="arrow"></span></a>
				            </li>
				            <ul class="sub-menu collapse" id="products">
				                <li><a href="{{route('report.buyHistory')}}">Buy</a></li>
				                <li><a href="{{route('invoice.sales')}}">Order list</a></li>
				                <li><a href="{{route('report.orderList')}}">Delivered</a></li>
				                <li><a href="{{route('report.cancelList')}}">Canceled</a></li>
				                <li class="active"><a href="{{route('report.salesList')}}">Sales</a></li>
				            </ul>
				            <li  data-toggle="collapse" data-target="#add" class="collapsed active">
								<a href="#"><i class="fa fa-gift fa-lg"></i> Add new<span class="arrow"></span></a>
				            </li>
				            <ul class="sub-menu collapse" id="add">
				                <li><a href="{{route('adminProduct.addProducts')}}">Product</a></li>
				                <li><a href="#">Category</a></li>
				                <li><a href="#">Sub category</a></li>
				                <li><a href="{{route('admin.registration')}}">Employee</a></li>
				            </ul>
				            <li><a href="{{route('reg.employeeAll')}}">Employee</a></li>
				            <li><a href="{{route('admin.customers')}}">Customers</a></li>
				            <!-- <li><a href="#">Report</a></li>
				            <li><a href="#">Information</a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-10 col-md-10" id="body-section">
			@yield('content')
		</div>
	</div>
</div>
@endif
</body>
@endsection