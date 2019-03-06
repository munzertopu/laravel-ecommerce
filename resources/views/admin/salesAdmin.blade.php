@extends('admin.index')

@section('content')
<div class="container-fluid">
    <h4>Sales</h4>
    <table class="table table-hover" style="border: 1px solid gray">
      <thead>
        <tr style="background-color: gray">
          <th>Invoice ID</th>
          <th>Employee ID</th>
          <th>Employee Name</th>
          <th>Customer ID</th>
          <th>Customer name</th>
          <th>Total Price</th>
          <th>Date Time</th>
          <th>Status</th>

        </tr>
      </thead>
      <tbody>
       @foreach($invoice as $inv)
        <tr>
        <td >{{$inv->id}} </td>
        <td >{{$inv->empid}} </td>
        <td >{{$inv->employeename}} </td>
        <td >{{$inv->customerid}} </td>
  			<td >{{$inv->customername}} </td>
  			<td >{{$inv->price}} </td>
        <td >{{$inv->datetime}} </td>
        @if($inv->status=='ON_PROCESS')
  			<td style="color:brown" >{{$inv->status}} </td>
        @endif
         @if($inv->status=='DELIVERED')
        <td style="color:green" >{{$inv->status}} </td>
        @endif
        @if($inv->status =='CANCELLED')
        <td style="color:red" >{{$inv->status}} </td>
        @endif

  	    </tr>

        @endforeach
      </tbody>
    </table>
</div>
@endsection