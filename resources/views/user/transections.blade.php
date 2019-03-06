@extends('user.index')

@section('content')
<div class="container-fluid">
    <h4>Transections</h4>
    <table class="table table-hover" style="border: 1px solid gray">
      <thead>
        <tr style="background-color: gray">
          <th>Invoice ID</th>
          <th>Total Price</th>
          <th>Date Time</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach($invoice as $inv)
        <tr>
    			<td >{{$inv->id}} </td>
    			<td >{{$inv->price}} </td>
          <td >{{$inv->datetime}} </td>
          @if($inv->status=='ON_PROCESS')
    			<td style="color:red" >{{$inv->status}} </td>
          @endif
          @if($inv->status!='ON_PROCESS')
          <td style="color:green" >{{$inv->status}} </td>
          @endif
  	    </tr>
        @endforeach
      </tbody>
  </table>
@endsection