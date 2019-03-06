@extends('admin.index')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6" class="activity-banner">
		<div class="tile tile-primary">
			<div class="tile-heading">CURRENT ORDERS</div>
			<div class="tile-body">
				<span><img src="{{asset('images')}}/admin/shopping-trolley.png"></span>
				<h2 class="pull-right">{{$orderNumber}}</h2>
			</div>
			<div class="tile-footer">
				<a href="{{route('invoice.sales')}}">View all.....</a>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6" class="activity-banner">
		<div class="tile tile-primary">
			<div class="tile-heading">TOTAL DELIVERED</div>
			<div class="tile-body">
				<span><img src="{{asset('images')}}/admin/shopcartapply.png"></span>
				<h2 class="pull-right">{{$delNumber}}</h2>
			</div>
			<div class="tile-footer">
				<a href="{{route('report.orderList')}}">View all.....</a>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6" class="activity-banner">
		<div class="tile tile-primary">
			<div class="tile-heading">TOTAL SALES</div>
			<div class="tile-body">
				<span><img src="{{asset('images')}}/admin/sales.png"></span>
				<h4 class="pull-right">BDT: {{$saleNumber}}</h4>
			</div>
			<div class="tile-footer">
				<a href="{{route('report.salesList')}}">View all.....</a>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6" class="activity-banner">
		<div class="tile tile-primary">
			<div class="tile-heading">CUSTOMERS</div>
			<div class="tile-body">
				<span><img src="{{asset('images')}}/admin/user-icon.png"></span>
				<h2 class="pull-right">{{$userNumber}}</h2>
			</div>
			<div class="tile-footer">
				<a href="#">View all.....</a>
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12" id="activity-table">
			<div class="heading">
				<h3>Latest orders</h3>
			</div>
			<div class="table-responsive table-hover">
				<table class="table">
					<thead>
						<tr>
							<th>Invoice ID</th>
							<th>Customer ID</th>
			                <th>Customer name</th>
			                <th>Total price</th>
			                <th>Order Time</th>
			                <th>Status</th>
			                <th>Option</th>
						</tr>
					</thead>
					<tbody>
                        @foreach($orderList as $inv)
                        <tr>
                            <td >{{$inv->id}} </td>
                            <td >{{$inv->customerid}} </td>
                            <td >{{$inv->name}} </td>
                            <td >{{$inv->price}} </td>
                            <td >{{$inv->datetime}} </td>
                            @if($inv->status=='ON_PROCESS')
                            <td style="color:blue" >{{$inv->status}} </td>
                            @endif
                            @if($inv->status=='DELIVERED')
                            <td style="color:green" >{{$inv->status}} </td>
                            @endif
                            @if($inv->status =='CANCELLED')
                            <td style="color:red" >{{$inv->status}} </td>
                            @endif
                            <td ><a style="color:green" href="{{route('order.orderDetails', [$inv->id])}}">Details</a>
                        </tr>
                        @endforeach
                    </tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- <div class="row">

	<div  class="col-xl-3">
	  <div class="card" style="width:400px">
	    <img class="card-img-top" src="images/product.jpg" alt="Card image" width="400" height="300">
	    <div class="card-body">
	      <h4 class="card-title">Products</h4>
	      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
	      <a href="{{route('adminProduct.show')}}" class="btn btn-primary">View All</a>
	    </div>
	  </div>
	</div>
	@if(session()->get('loggedUser')->type == "ADMIN")

	<div  class="col-xl-1">

	</div>
	<div  class="col-xl-3">
	  <div class="card" style="width:400px">
	    <img class="card-img-top" src="images/employee.jpg" alt="Card image" width="400" height="300">
	    <div class="card-body">
	      <h4 class="card-title">Employees</h4>

	      <a href="{{route('reg.employeeAll')}}" class="btn btn-primary">View All</a>
	    </div>
	  </div>
	</div>

	<div  class="col-xl-1">

	</div>
	@endif
	<div  class="col-xl-3">
	  <div class="card" style="width:400px">
	    <img class="card-img-top" src="images/account.jpg" alt="Card image" width="400" height="300">
	    <div class="card-body">
	    @if(session()->get('loggedUser')->type == "ADMIN")
	      <h4 class="card-title">Accounts</h4>
	       <a href="{{route('report.orderList')}}" class="btn btn-primary">View Details</a>
	      @endif
	      @if(session()->get('loggedUser')->type == "SALESMAN")
	      <h4 class="card-title">SALES</h4>
	       <a href="{{route('invoice.sales')}}" class="btn btn-primary">View Details</a>
	      @endif


	    </div>
	  </div>
	</div>
</div> -->
@endsection