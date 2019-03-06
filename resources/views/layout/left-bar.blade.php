@section('lef-bar')
<div class="sidebar-offcanvas">
	<div class="nav-side-menu col-md-12">
		<div class="menu-list">
			<ul class="menu-content collapse-out" id="left-menu-content">
				<li><a href="/admin">Dashboard</a></li>
				<li><a href="/admin/products">Products</a></li>
				<li><a href="/admin/categories">Categories</a></li>
				<li><a href="/admin/companies">Company</a></li>
				<li  data-toggle="collapse" data-target="#products" class="collapsed active">
				<a href="#"><i class="fa fa-gift fa-lg"></i> Sales <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="products">
                <li class="active"><a href="/admin/orders">Orders</a></li>
                <li><a href="/admin/process">Process</a></li>
                <li><a href="/admin/delivered">Delivered</a></li>
                <li><a href="/admin/returns">Returns</a></li>
            </ul>
            <li><a href="#">Employee</a></li>
            <li><a href="#">Customers</a></li>
            <li><a href="#">Report</a></li>
            <li><a href="#">Information</a></li>
			</ul>
		</div>
	</div>
</div>
@endsection